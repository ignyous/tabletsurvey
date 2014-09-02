var wrapper = document.getElementById("signature-pad"),
	clearButton = wrapper.querySelector("[data-action=clear]"),
    saveButton = wrapper.querySelector("[data-action=save]"),
    canvas = wrapper.querySelector("canvas"),
    signaturePad;
	
var wrapperconsent = document.getElementById("signature-pad-consent"),
    clearButtonconsent = wrapperconsent.querySelector("[data-action=clear]"),
    saveButtonconsent = wrapperconsent.querySelector("[data-action=save]"),
    canvasconsent = wrapperconsent.querySelector("canvas"),
    signaturePadConsent;	

// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
function resizeCanvas() {
    var ratio =  window.devicePixelRatio || 1;
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
	
	canvasconsent.width = canvasconsent.offsetWidth * ratio;
    canvasconsent.height = canvasconsent.offsetHeight * ratio;
    canvasconsent.getContext("2d").scale(ratio, ratio);
	
}

window.onresize = resizeCanvas;
resizeCanvas();
signaturePad = new SignaturePad(canvas);
signaturePadConsent = new SignaturePad(canvasconsent);


clearButton.addEventListener("click", function (event) {
    signaturePad.clear();
});

saveButton.addEventListener("click", function (event) {
    if (signaturePad.isEmpty()) {
        alert("Please provide signature first.");
    } else {
        window.open(signaturePad.toDataURL());
    }
});

clearButtonconsent.addEventListener("click", function (event) {
    signaturePadConsent.clear();
});

saveButtonconsent.addEventListener("click", function (event) {
    if (signaturePadConsent.isEmpty()) {
        alert("Please provide signature first.");
    } else {
        window.open(signaturePadConsent.toDataURL());
    }
});