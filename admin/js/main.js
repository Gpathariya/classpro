document.addEventListener("DOMContentLoaded", function () {
  let checkboxes = document.querySelectorAll(".checkbtn");
  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("click", () => {
      let textId = checkbox.getAttribute("data-text-id");
      let text = document.getElementById(textId);

      if (text) {
        if (text.innerHTML == "A") {
          text.innerHTML = "P";
          checkbox.setAttribute("value", "P");
          // checkbox.value = "P";
        } else if (text.innerHTML == "P") {
          text.innerHTML = "A";
          checkbox.setAttribute("value", "A");
          // checkbox.value = "A";
        } else {
        }
      } else {
        console.error(`Element with ID ${textId} not found.`);
      }
    });
  });
});

//==================================================
// Get all checkboxes with class 'checkbtn'
// let checkboxes = document.querySelectorAll(".checkbtn");

// checkboxes.forEach((checkbox) => {
//   // Add event listener to each checkbox
//   checkbox.addEventListener("click", () => {
//     // Get the associated text element using the data attribute
//     // let textId = checkbox.getAttribute("data-text-id");
//     // let text = document.getElementById(textId);
//     let text = document.getElementById("p_a");

//     // Check and update the text element
//     if (text.innerHTML == "A") {
//       text.innerHTML = "P";
//       checkbox.setAttribute("value", "1"); // Use setAttribute to set the value
//     } else {
//       text.innerHTML = "A";
//       checkbox.setAttribute("value", "0");
//     }
//   });
// });
// ===================================================================
// let checkbtn = document.querySelectorAll(".checkbtn");
// let checkbtn = document.getElementById("checkbtn");
// let text = document.getElementById("p_a");
// let text = document.querySelectorAll(".p_a");
// let val = checkbox.getAttribute("value");
// function checkboxes() {
//   if (text.innerHTML === "A") {
//     text.innerHTML = "P";
//     checkbtn.setAttribute("value", "1");
//   } else {
//     text.innerHTML = "A";
//     checkbtn.setAttribute("value", "0");
//   }
// }

// ==================================================
// ==================================================
// ==================================================

// const textElement = document.getElementById(checkbox.dataset.textId);
// function CheckboxText(checkbox) {
//   // Get the text element associated with the checkbox
//   const textElement = document.getElementById(checkbox.dataset.textId);
//   if (checkbox.checked) {
//     textElement.textContent = "P";
//     checkbox.value = "1";
//   } else {
//     // Change text back to "A" when unchecked
//     textElement.textContent = "A";
//     checkbox.value = "0"; // Clear the value when unchecked
//   }
// }

// window.addEventListener("DOMContentLoaded", function () {
//   // function CheckboxText(checkbox) {
//   //   // Your function logic here

//   // }
//   const textElement = document.getElementById(checkbox.textId);
//   const checkbtn = document.getElementById("checkbtn");
//   checkbtn.addEventListener("click", () => {
//     if (checkbox.checked) {
//       textElement.textContent = "P";
//       checkbox.value = "1";
//     } else {
//       textElement.textContent = "A";
//       checkbox.value = "0";
//     }
//   });

// Attach event listeners to your checkboxes here
// ...
// });

// function checkboxes() {
// const text = document.getElementById("text");
// const checkbtn = document.getElementById("checkbtn");
// const text = document.getElementsByClassName("text")[index + 1];
// const checkbtn = document.getElementsByClassName("checkbtn")[index + 1];
// if (text.innerHTML === "A") {
//   text.innerHTML = "P";
//   checkbtn.setAttribute("value", "1");
// } else if (text.innerHTML === "P") {
//   text.innerHTML = "A";
//   checkbtn.setAttribute("value", "0");
// } else {
// }

// text.innerHTML === "A" ? (text.innerHTML = "P") : (text.innerHTML = "A");
// }

// ==================================================
// ==================================================
// ==================================================

// checkbtn.forEach(function (e) {
//   // text.[0]++;

//   });
// e.onclick = function () {
//   if (text.innerHTML === "A") {
//     text.innerHTML = "P";
//   } else {
//     text.innerHTML = "A";
//   }
// };
// checkbtn.addEventListener("click", () => {
//   if (text.innerHTML === "A") {
//     text.innerHTML = "P";
//     checkbtn.setAttribute("value", "1");
//   } else {
//     text.innerHTML = "A";
//     checkbtn.setAttribute("value", "0");
//   }
// });
// let checkbtn = document.getElementById("checkbtn");
// let btch_check = document.getElementById("check");

// checkbtn.addEventListener("click", () => {
//   // Check the checked state of the checkbox
//   if (checkbtn.checked) {
//     btch_check.checked = true;
//   } else {
//     btch_check.checked = false;
//   }
// });
