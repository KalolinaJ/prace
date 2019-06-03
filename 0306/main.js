const tabsBtn = document.querySelectorAll('.tabs__btn');
const tabsContent = document.querySelectorAll('.tabs__content');
const deleteBtn = document.querySelectorAll('.deleteTab');


console.dir(tabsBtn);

tabsBtn.forEach((button)=>{
    button.addEventListener('click', (e)=>{
        const tabNr = button.dataset.tabNr;
        console.log(button);
        tabsBtn.forEach(btn=>{
            btn.classList.remove("isActive");
        })
        button.classList.add("isActive");
    })
})

deleteBtn.forEach((delButton) =>{
    delButton.addEventListener('click', (e)=>{
        let buttonParent = delButton.parentElement;
        let contentNR = buttonParent.dataset.tabNr;
        tabsContent.forEach(content =>{
            let contentNR = content.dataset.contentNR;
            if (contentNR === tabNr);
                content.style.color="rosybrown";
                content.style.display = "none";
                buttonParent.style.display = "none";

        })

        e.stopPropagation();
    })
})