function disableButton() {
    var button = document.getElementById('newsletter-button');
    button.disabled = true;
    button.className = "";
    button.className = 'bg-blue-300 w-1/4 items-center justify-center';
}

function enableButton() {
    var button = document.getElementById('newsletter-button');
    button.disabled = false;
    button.className = "";
    button.className = "bg-buy-button w-1/4 items-center ease-in-out delay-50 hover:scale-110 duration-300 justify-center";
}

function getUserAgreement() {
    var userAgreement = document.getElementById("userAgreement");
    var inputText = document.getElementById('newsletter_input').value.trim();  
    if (inputText.length != 0 && userAgreement.childElementCount != 0) return;        
    else if (inputText.length === 0) {
        if (userAgreement.childElementCount != 0) {
            disableButton();
            document.getElementById('userAgreementCheckbox').remove();                
        }
        return;
    }    
    var checkbox = document.createElement("div");
    checkbox.id = 'userAgreementCheckbox';
    checkbox.classList.add('flex', 'items-center');

    var input = document.createElement('input');
    input.className = "w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2";
    input.type = "checkbox";
    input.id = "agreement-checkbox";
    input.setAttribute('onclick', 'checkedUserAgreement()');

    var label = document.createElement('label');
    label.for = "agreement-checkbox";
    label.className = "ml-2 text-sm font-medium text-gray-900";
    label.innerHTML = "Съгласявам се Biotrade да изпраща на имейла ми други информационни материали и маркетингови съобщения в съответствие с Политиката за поверителност";

    checkbox.appendChild(input);
    checkbox.appendChild(label);
    userAgreement.appendChild(checkbox);
}

function checkedUserAgreement() {
    var checkbox = document.getElementById('agreement-checkbox');
    var button = document.getElementById('newsletter-button');
    if (checkbox.checked == true) {
        enableButton();
    } else {
        disableButton();
    }
}