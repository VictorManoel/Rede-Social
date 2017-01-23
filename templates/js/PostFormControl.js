(function () {

    resizingTextareas = [].slice.call(document.querySelectorAll('textarea'));
    len = resizingTextareas.length;

    for(var i = 0; i < len ; i++){

        resizingTextareas[i].addEventListener('input', autoresize, false);

    }

    function autoresize() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight+'px';
        this.scrollTop = this.scrollHeight;
         window.scrollTo(window.scrollLeft,(this.scrollHeight - window.innerHeight/1.5));
    }

})();   

(function () {

    form = document.querySelector('.postform');
    formTextarea = document.querySelector('.postform-text');
    formFile = document.querySelector('#postform-inputpic');
    FileList = document.querySelector('.postform-filelist');
    FileListName = document.querySelector('.postform-file-name');
    FileListClear = document.querySelector('.postform-filelist .clear');
    Erro = document.querySelector('.postform-error');

    form.addEventListener('submit', function (){ //If form submit

        Erro.style.height = 0;
        if(formTextarea.value.trim()==='' && formFile.value.trim()===''){           
            event.preventDefault(); 
            Erro.style.height = '30px';
            formTextarea.focus();
        }
    });

    formFile.addEventListener('change', function (){ //If file form change

        if(this.value != ''){
            fileName = this.value.split('\\');
            FileListName.innerHTML = fileName[2];
            Erro.style.height = 0;
            FileList.style.height = '30px';

        }  
    });

    FileListClear.addEventListener('click', function(){ //Clear file form

        FileList.style.height = 0;
        formFile.value = '';

    });

})();