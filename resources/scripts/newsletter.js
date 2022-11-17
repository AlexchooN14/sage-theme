function getUserAgreement() {
    alert('Hello');
    var userAgreement = document.getElementById("userAgreement");
    var inputText = document.getElementById('newsletter_input').value.trim();  
    if (inputText.length != 0 && userAgreement.childElementCount != 0) return;        
    else if (inputText.length === 0) {
        if (userAgreement.childElementCount != 0) {         
            document.getElementById('userAgreementCheckbox').remove();                
        }
        return;
    }    
    var checkbox = document.createElement("div");
    checkbox.id = 'userAgreementCheckbox';
    checkbox.classList.add('flex', 'items-center');
    checkbox.innerHTML = '<input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 "><label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Съгласявам се Biotrade да изпраща на имейла ми други информационни материали и маркетингови съобщения в съответствие с Политиката за поверителност</label>';
    userAgreement.appendChild(checkbox);
}
