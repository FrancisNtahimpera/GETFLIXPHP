//créer un paragraphe
function create_paragraph(element_id, text){
    const paragraph = document.createElement("p");
    const text_inside_paragraph = document.createTextNode(text);
    paragraph.appendChild(text_inside_paragraph);

    const element = document.getElementById(element_id);
    element.appendChild(paragraph);
}



export {create_paragraph}