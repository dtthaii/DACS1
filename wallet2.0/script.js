$(document).on("scroll", function() {
    var scrollPos = $(document).scrollTop();
    var navbar = $(".navbar");
    
    //Add or remove navbar-solid based on scroll position
    if (scrollPos > 0) {
        navbar.addClass("navbar-solid");
    } else {
        navbar.removeClass("navbar-solid");
    }

    //Add or remove active class on nav-links

    $(".nav-link").each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (
            refElement.position().top <= scrollPos && 
            refElement.position().top + refElement.height() > 
            scrollPos
            ) {
           $(".nav-link").removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
    });
});

 //Mobile Menu
 $(".menu-btn").click(function() {
    $(".navbar").toggleClass("mobile");
    $(".menu-btn").toggleClass("active");
});

//Metamask
const forwarderOrigin = 'http://localhost:5500';

const initialize = () => {
    const connectButton = document.getElementById('connectWallet');
    const { ethereum } = window;
    const onboardMetaMaskClient = async () => {
        if (!isMetamaskInstalled()) {
            // prompt the user to install it
            console.log("MetaMask is not installed :(");
            connectButton.value = "Click here to install metamask";
            connectButton.onclick = installMetaMask;
        } else {
            console.log("MetaMask is installed Hurray!!!!!");
            connectButton.onclick = connectMetaMask;
        }
    }

    const connectMetaMask = async () => {
        connectButton.disabled = true;
        try {
            const accounts = await ethereum.request({ method: "eth_requestAccounts" });
            connectButton.value = "Connected";
            console.log("accounts: ", accounts);
            connectButton.disabled = false;
        } catch (err) {
            console.error("error occured while connecting to MetaMask: ", err)
        }
    }

    const isMetamaskInstalled = () => {
        return ethereum && ethereum.isMetaMask;
    }

    const installMetaMask = () => {
        const onboarding = new MetaMaskOnboarding({ forwarderOrigin });
        connectButton.value = "Installation in progress";
        connectButton.disabled = true;
        onboarding.startOnboarding();
    }

    onboardMetaMaskClient();
};

window.addEventListener('DOMContentLoaded', initialize);

// Credit Card
const form = document.querySelector("#credit-card");

const cardNumber = document.querySelector("#card-number");
const cardHolder = document.querySelector("#name-text");
const cardExpiration = document.querySelector("#valid-thru-text");
const cardCVV = document.querySelector("#cvv-text");

const cardNumberText = document.querySelector(".number-vl");
const cardHolderText = document.querySelector(".name-vl");
const cardExpirationText = document.querySelector(".expiration-vl");
const cardCVVText = document.querySelector(".cvv-vl");

cardNumber.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardNumberText.innerText = "1234 5678 9101 1121";
    } else {
        const valuesOfInput = e.target.value.replaceAll(" ", "");

        if (e.target.value.length > 14) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
            cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
        } else if (e.target.value.length > 9) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
            cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
        } else if (e.target.value.length > 4) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
            cardNumberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
        } else {
            cardNumberText.innerHTML = valuesOfInput
        }
    }
})

cardHolder.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardHolderText.innerHTML = "NGUYEN DINH DUY THAI";
    } else {
        cardHolderText.innerHTML = e.target.value.toUpperCase();
    }
})

cardExpiration.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardExpirationText.innerHTML = "02/40";
    } else {
        const valuesOfInput = e.target.value.replace("/", "");

        if (e.target.value.length > 2) {
            e.target.value = valuesOfInput.replace(/^(\d{2})(\d{0,2})/, "$1/$2");
            cardExpirationText.innerHTML = valuesOfInput.replace(/^(\d{2})(\d{0,2})/, "$1/$2");
        } else {
            cardExpirationText.innerHTML = valuesOfInput;
        }
    }
})

cardCVV.addEventListener("keyup", (e) => {
    if (!e.target.value) {
        cardCVVText.innerHTML = "123";
    } else {
        cardCVVText.innerHTML = e.target.value;
    }
})

form.addEventListener("submit", (e) => {
    e.preventDefault();

    alert("Credit Card Added!");
})



