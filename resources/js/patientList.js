import Vue from 'vue';
import PatientList from "./components/patient/PatientList";
import ModalPatientInfo from "./components/patient/ModalPatientInfo";

new Vue({
    el: '#app',
    components: {
        PatientList,
        ModalPatientInfo
    }
});
