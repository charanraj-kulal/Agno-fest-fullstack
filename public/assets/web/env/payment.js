const AUTH_URL = `${API_URL}/team/${teamId}/verify`;
// console.log(teamId);

const paymentLoader = document.querySelector("#loader-lottie-div-payment");

const imagekit = new ImageKit({
  publicKey: "public_KYo+rOuJkO2Bf74Wbbr5RrBz8lE=",
  urlEndpoint: "https://ik.imagekit.io/afnan011/",
  authenticationEndpoint: AUTH_URL,
});

// Function to handle image upload
const uploadImageBtn = document.querySelector("#payment-upload-btn");

uploadImageBtn.onclick = () => {
  const transactionId = document.querySelector(".acc-nums1").value;
  const fileInput = document.getElementById("fileInput");
  const file = fileInput.files[0];

  if (file) {
    if (verifyTransactionId(transactionId)) {
      openAlert("Enter Transaction id!");
      return;
    }

    paymentLoader.style.display = "block";
    // Fetch authentication parameters from the backend
    fetch(AUTH_URL)
      .then((response) => response.json())
      .then((authParams) => {
        // Extract correct values
        const { token, expire, signature } = authParams;

        // Use the ImageKit SDK to upload the image
        imagekit.upload(
          {
            file: file,
            fileName: file.name,
            tags: ["screenshots"],
            token: token,
            expire: expire,
            signature: signature,
          },
          (err, result) => {
            const imgUrl = imagekit.url({
              src: result.url,
            });
            // console.log(imgUrl);
            if (err) {
              openAlert("Error uploading image. Please try again.");
              console.error("Error uploading image:", err);
            } else {
              if (sendPaymentMail1()) {
                updateScreenshot(imgUrl, transactionId);
                openAlert("Payment screenshot uploaded successfully");
                // console.log("Image uploaded successfully:", result);
              }
            }
            paymentLoader.style.display = "none";
          }
        );
      })
      .catch((error) => {
        console.error("Error fetching authentication parameters:", error);
        paymentLoader.style.display = "none";
        openAlert("Error uploading image. Please try again");
      });
  } else {
    console.error("No file selected.");
    paymentLoader.style.display = "none";
    openAlert("No file selected!");
  }
};

const updateScreenshot = async (imageUrl, transactionId) => {
  if (!teamId) {
    console.error("Team ID is missing.");
    return;
  }

  const paymentData = {
    paymentStatus: {
      screenshot: imageUrl,
      transactionId: transactionId,
    },
  };
  try {
    const res = await fetch(`${API_URL}/team/${teamId}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(paymentData),
    });
    // const data = await res.json();
  } catch (err) {
    console.error(err);
  }
};

const verifyTransactionId = (transactionId) => {
  return (
    transactionId.length == 0 || transactionId == "" || transactionId == null
  );
};

function handleFileSelect() {
  const fileInput = document.getElementById("fileInput");
  const fileNameDisplay = document.getElementById("fileName");

  // Get the file name
  const fileName = fileInput.value.split("\\").pop();

  // Display the file name
  fileNameDisplay.textContent = `Selected file: ${fileName}`;
}

const updateTransactionID = async () => {
  const transactionId = document.querySelector(".acc-nums1");
  const data = await fetchData();
  // console.log(data.paymentStatus.transactionId);
  transactionId.value = data.paymentStatus.transactionId || "";
};
updateTransactionID();

const sendPaymentMail1 = async () => {
  try {
    const res = await fetch(`${API_URL}/team/${teamId}/sendPayment1`);
    const data = await res.json();

    if (res.status === 400) {
      openAlert(data.message);
    }

    return res.status === 400 ? false : true;
  } catch (err) {
    console.error(err);
  }

  return false;
};

//to copy upi id to clipboard
document.getElementById("upiId").addEventListener("click", function () {
  const text = this.innerText; // Get the inner text of the <b> element
  const textarea = document.createElement("textarea");
  textarea.value = text;
  document.body.appendChild(textarea);
  textarea.select();
  document.execCommand("copy");
  document.body.removeChild(textarea);
  openAlert("Copied to clipboard!");
});

//to display custom amounts for UG and PG
async function displayPaymentAmount() {
  const pay_amt = document.getElementById("pay_amt");
  const qr_code_image = document.getElementById("qr_code_img");

  try {
    const data = await fetchData();
    const isUG = data.isUG;
    if (isUG) {
      pay_amt.innerText = "Rs.750";
      qr_code_image.src = "/assets/images/qr-code-ug.png";
    } else {
      pay_amt.innerText = "Rs.1500";
      qr_code_image.src = "/assets/images/princi-qr-code.png";
    }
  } catch (error) {
    console.error("Error fetching data:", error);
  }
}
displayPaymentAmount();
