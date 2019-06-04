const addTabAndContent = document.querySelector('.add_btn');

getTabsBtn = () =>{
    const tabsBtn = document.querySelectorAll('.tabs_btn');
    return tabsBtn;
}

getTabsContent = () => {
    const tabsContent = document.querySelectorAll('.tabs_content');
    return tabsContent;
}

getDeleteBtn = () => {
    const deleteBtn = document.querySelectorAll('.deleteTab');
    return deleteBtn;
}

function addNewDeleteBtn(){
    let addNewDeleteBtn = document.createElement('span');
    addNewDeleteBtn.innerText ='x';
    addNewDeleteBtn.classList.add('deleteTab');
    tabsBtn.appendChild(addNewDeleteBtn);
}

function updateTabsList(){
    getTabsBtn().forEach((button) => {
        button.addEventListener('click', () => {
            const tabNr = button.dataset.tabNr;
            getTabsBtn().forEach(btn => {
                btn.classList.remove("isActive");
            })
            button.classList.add("isActive");
            getTabsContent().forEach(content => {
                let contentNr = content.dataset.contentNr;
                content.classList.remove("isActive");
                if (contentNr === tabNr) {
                    content.classList.add("isActive");
                }
            })
        })
    })
}

function updateDeleteBtn(){
    getDeleteBtn().forEach((delButton) =>{
        delButton.addEventListener('click', (e) =>{
            let buttonParent = delButton.parentElement;
            let tabNr = buttonParent.dataset.tabNr;
            getTabsContent().forEach(content => {
                let contentNr = content.dataset.contentNr;
                if(contentNr === tabNr) {
                    content.parentElement.removeChild(content);
                    buttonParent.parentElement.removeChild(buttonParent);
            
                }
            })
            e.stopPropagation();
        })
    })
}

function addNewTab(event) {
    let tabSidebar = event.target.parentElement;
    let newButton = document.createElement('button');
    newButton.innerText = 'Tabs ${getTabsBtn().length +1}';
    newButton.classList.add("tabs_btn");
    newButton.dataset.tabNr = getTabsBtn().length +1;
    tabSidebar.appendChild(newButton);
    return newButton;
}

function addNewDeleteBtn(){
    let addNewDeleteBtn = document.createElement('span');
    addNewDeleteBtn.innerText = 'x';
    addNewDeleteBtn.classList.add("deleteTAb");
    newButton.appendChild(addNewDeleteBtn);
}

addTabAndContent.addEventListener('click', (event) => {
    let tabSidebar = event.target.parentElement;
    let newButton = addNewTab(tabSidebar);
    addNewDeleteBtn(newButton);
    addNewContent(tabSidebar);

    updateTabsList();
    updateDeleteBtn();
})

function init(){
    updateTabsList();
    updateDeleteBtn();
}

init();