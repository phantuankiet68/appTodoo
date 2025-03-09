let optionsButtons = document.querySelectorAll(".option-button");
let advancedOptionButton = document.querySelectorAll(".adv-option-button");
let fontName = document.getElementById("fontName");
let fontSizeRef = document.getElementById("fontSize");
let writingArea = document.getElementById("text-input");
let linkButton = document.getElementById("createLink");
let alignButtons = document.querySelectorAll(".align");
let spacingButtons = document.querySelectorAll(".spacing");
let formatButtons = document.querySelectorAll(".format");
let scriptButtons = document.querySelectorAll(".script");

let fontList = ["Arial", "Verdana", "Times New Roman", "Garamond", "Georgia", "Courier New", "cursive"];

const initializer = () => {
    highlighter(alignButtons, true);
    highlighter(spacingButtons, true);
    highlighter(formatButtons, false);
    highlighter(scriptButtons, true);

    fontList.forEach(value => {
        let option = document.createElement("option");
        option.value = value;
        option.innerHTML = value;
        fontName.appendChild(option);
    });

    for (let i = 1; i <= 7; i++) {
        let option = document.createElement("option");
        option.value = i;
        option.innerHTML = i;
        fontSizeRef.appendChild(option);
    }

    fontSizeRef.value = 3;
    document.execCommand("defaultParagraphSeparator", false, "p");
};

const modifyText = (command, defaultUi, value) => {
    document.execCommand(command, defaultUi, value);
};

optionsButtons.forEach(button => {
    button.addEventListener("click", () => {
        modifyText(button.id, false, null);
    });
});

advancedOptionButton.forEach(button => {
    button.addEventListener("change", () => {
        modifyText(button.id, false, button.value);
    });
});

linkButton.addEventListener("click", () => {
    let userLink = prompt("Enter a URL");
    if (!/http/i.test(userLink)) {
        userLink = "http://" + userLink;
    }
    modifyText("createLink", false, userLink);
});

const highlighter = (className, needsRemoval) => {
    className.forEach(button => {
        button.addEventListener("click", () => {
            if (needsRemoval) {
                highlighterRemover(className);
                button.classList.add("active");
            } else {
                button.classList.toggle("active");
            }
        });
    });
};

const highlighterRemover = (className) => {
    className.forEach(button => button.classList.remove("active"));
};

const ensureParagraphWrapper = () => {
    if (writingArea.innerHTML.trim() === "") {
        writingArea.innerHTML = "<p><br></p>";
    }
};

writingArea.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
        event.preventDefault();

        let selection = window.getSelection();
        let range = selection.getRangeAt(0);
        let currentNode = selection.anchorNode;

        while (currentNode.nodeType !== 1) {
            currentNode = currentNode.parentNode;
        }

        if (currentNode.tagName === "H2") {
            let newParagraph = document.createElement("p");
            newParagraph.innerHTML = "<br>";
            currentNode.parentNode.insertBefore(newParagraph, currentNode.nextSibling);
        } else {
            document.execCommand("insertParagraph", false, null);
        }
    }
});

const applyStyles = () => {
    writingArea.querySelectorAll("h1, h2, h3, h4, h5, h6").forEach(el => {
        el.style.fontSize = "24px";
        el.style.fontWeight = "bold";
        el.style.color = "black";
        el.style.margin = "10px 0";
    });
};

const observer = new MutationObserver(() => {
    applyStyles();
});

observer.observe(writingArea, { childList: true, subtree: true });

window.onload = () => {
    initializer();
    ensureParagraphWrapper();
};
