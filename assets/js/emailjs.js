/*=============== EMAIL JS ===============*/
const contactForm = document.getElementById("contact-form"),
  contactMessage = document.getElementById("contact-message");

const sendEmail = (e) => {
  e.preventDefault();

  // serviceID - templateID - #form - publicKey
  emailjs
    .sendForm(
      "service_48f6wch",
      "template_9y7h7am",
      "#contact-form",
      "hnK4iTb9HGGHMysSY"
    )
    .then(
      () => {
        // Show sent message
        contactMessage.textContent = "Mensaje enviado correctamente ✅";

        // Remove message after five seconds
        setTimeout(() => {
          contactMessage.textContent = "";
        }, 5000);

        //Clear inputs fields
        contactForm.reset();
      },
      () => {
        // Show error message
        contactMessage.textContent =
          "Mensaje no enviado (error del servicio) ❌";
      }
    );
};

contactForm.addEventListener("submit", sendEmail);
