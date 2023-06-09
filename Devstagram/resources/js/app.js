//Configuracion de Dropzone
import Dropzone from "dropzone";
Dropzone.autoDiscover=false ;
const dropzone=new Dropzone("#dropzone",{
    dictDefaultMessage: "Sube aqui tu imagen",
    acceptedFiles:".png,.jpg,.jpeg,.gif",
    addRemoceLinks:true,
    dictRemoveFile: "Borrar archivos",
    maxFiles:1,
    uploadMultiples:false,
})