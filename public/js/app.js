import {Application, Controller} from "./stimulus.js";

const application = Application.start();
window.Stimulus   = application;

window.StimulusController = Controller;
