import {uuid} from "./uuid.js";

export function startLoader(element) {
  element.classList.add('position-relative');
  element.setAttribute("disabled", "disabled");
  let id = uuid();

  element.insertAdjacentHTML(
   'beforeend',
   `<div id="${id}" class="loader-container"><div class="small-circle-loader"></div></div>`
  );

  return id;
}

export function stopLoader(element, id) {
  element.classList.remove('position-relative');
  element.removeAttribute("disabled");
  document.getElementById(id).remove();
}