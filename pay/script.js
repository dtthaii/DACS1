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

//Popup Menu
let popup = document.getElementById("popup");

function openPopup() {
    popup.classList.add("open-popup");
}

function closePopup() {
    popup.classList.remove("open-popup");
}


// Metamask
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