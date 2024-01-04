const search_btn = document.querySelector('.search_btn');
const icons = document.querySelector('.icons'); 
const search_box = document.querySelector('.search_box');
const item_menu_list = document.querySelectorAll('.item_menu_list');

const close_search_btn = document.querySelector('.close_search_btn');

const open_menu = document.querySelector('.open_menu');
const close_menu = document.querySelector('.close_menu');
const menu_list = document.querySelector('.menu_list');


const openMenu = ()=>{
    menu_list.classList.add('open_menu');
    open_menu.style.display = 'none';
    close_menu.style.display = 'block'
}

const closeMenu = ()=>{
    menu_list.classList.remove('open_menu');
    close_menu.style.display = 'none';
    open_menu.style.display = 'block'
}

const closeSearchBar = ()=>{
    search_btn.style.display = 'block'; // cacher le bouton de recherche
    icons.classList.remove('active'); // active pour faire apparaître les autre boutons
    search_box.classList.remove('open_bar'); //ouverture du menu
}

const openSearchBar = ()=>{
    search_btn.style.display = 'none'; // cacher le bouton de recherche
    icons.classList.add('active'); // active pour faire apparaître les autre boutons
    search_box.classList.add('open_bar'); //ouverture du menu
}

//évènement pour ouvrir le champs de recherche
search_btn.addEventListener('click', openSearchBar);

//évènement pour fermer le champs de recherche
close_search_btn.addEventListener('click',closeSearchBar);

//évènement pour ouvrir le sub menu
item_menu_list.forEach((item) => {
    item.addEventListener('click', (e) => {
        if(item.firstElementChild.children.length > 0) {
            e.target.parentElement.classList.toggle('show_sub_menu');
        }
    })
});


open_menu.addEventListener('click', openMenu)

close_menu.addEventListener('click',closeMenu)

