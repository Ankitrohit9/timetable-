// Check for browser support
window.SpeechRecognition =
  window.SpeechRecognition || window.webkitSpeechRecognition;

// Create a new instance of SpeechRecognition
const recognition = new SpeechRecognition();

// Set recognition properties
recognition.interimResults = false;
recognition.lang = "en-US";

// Variables to store the voice inputs
let voiceInput1 = "";
let voiceInput2 = "";

// Function to start recognition and store the result in a variable
function startRecognition(buttonId, resultId, callback) {
  document.getElementById(buttonId).addEventListener("click", () => {
    recognition.start();
  });

  recognition.addEventListener("result", (event) => {
    const transcript = event.results[0][0].transcript;
    document.getElementById(resultId).textContent = `You said: ${transcript}`;
    callback(transcript);
  });

  recognition.addEventListener("end", () => {
    recognition.stop();
  });
}

// Start recognition for the first input
startRecognition("start-btn-1", "result-1", (transcript) => {
  voiceInput1 = transcript;
  //compareVoiceInputs();
});

// Start recognition for the second input
startRecognition("start-btn-2", "result-2", (transcript1) => {
  voiceInput2 = transcript1;
  compareVoiceInputs();
});

// Function to compare the two voice inputs
function compareVoiceInputs() {
  if (voiceInput1 && voiceInput2) {
    const comparisonResult =
      voiceInput1.toLowerCase() === voiceInput2.toLowerCase()
        ? "Match found!"
        : "No match.";
    document.getElementById("comparison-result").textContent = comparisonResult;
    console.log(comparisonResult);
  }
}
