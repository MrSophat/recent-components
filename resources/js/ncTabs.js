const listTab   = document.getElementsByTagName('nc-tab');
const childList = listTab[0].children
for(i=0; i<childList.length; i++) 
{
    const thisButtonChild = childList[i]
    thisButtonChild.addEventListener('click', ()=> 
    {
        const idContent     = thisButtonChild.dataset.tab
        const contentTab    = document.getElementById(idContent)
        contentTab.toggleAttribute('hidden')
    })
}
