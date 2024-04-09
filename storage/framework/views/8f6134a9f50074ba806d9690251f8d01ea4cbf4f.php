    

    <?php $__env->startSection('css'); ?>
        <style>
            .editing-tools-layout {
                display: flex;
                width: 100%;
                height: 100%;
                padding-top: 30px;
                position: relative;
            }
            .editing-tools-btn-group {
                display: flex;
                flex-direction: row;
                width: 28%;
                margin: 0;
                padding: 10px 0px;
                border: 0px solid #fff;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                border-radius: 0;
                position: absolute;
                left: 0px;
                background: #fff;
                height: 100%;
                align-items: center;
                justify-content: flex-start;
                overflow-y: auto;
                flex-wrap: wrap;
            }
            .editing-tools-btn-group button {
                border: 0px solid transparent;
                margin: 5px 0px;
                padding: 5px 0;
                background: transparent;
                display: flex;
                flex-direction: column;
                align-items: center;
                color: #000;
                transition: 0.3s ease-in;
                position:relative;
                width:50%;
            }
            .editing-tools-btn-group button:hover{
                background:#f5f9fc;
                transition: 0.3s ease-in;
            }
            .editing-tools-btn-group button .spectrum-Button-label {
                font-size: 12px;
                color: #007bff;
                text-align: center;
                width: 120px;
            }
            .editing-tools-btn-group button:hover .spectrum-Button-label{
                color:#000;
                transition: 0.3s ease-in;
            }
            .editing-tools-btn-group button .editing-icon{
                width:24px;
                Height:24px;
                margin-bottom:5px;
            
            }
            .editing-tools-btn-group button .editing-icon img{
                width:100%;
                Height:100%;
                filter: grayScale(0) brightness(1);
                transition: 0.3s ease-in;
            }
            .editing-tools-btn-group button:hover .editing-icon img{
                filter: grayScale(1) brightness(0);
                transition: 0.3s ease-in;
            }
            .editing-tools-btn-group button:hover{
                color: #007BFF;
                transition: 0.3s ease-in;
            }
            .upload-image-area {
                background: #fff;
                width: 70%;
                Height: 500px;
                margin: 0px 0% 0px auto;
                position: relative;
                border: 2px dashed #000;
                border-radius: 30px;
            }
            .upload-image-area .upload-img{
                appearance:none;
                position:absolute;
                width:250px;
                Height:250px;
                top:50%;
                left:50%;
                transform: translate(-50%, -50%);
                background:url("../../../../public/img/editor/gallery-blue.png")no-repeat;
                background-size:85%;
                background-position: bottom center;
                border:none;
                text-align:center;
                margin-top:50px;
            }
            .upload-image-area .upload-img:hover{
                cursor:pointer;
            }
            .upload-image-area .upload-img::file-selector-button{
                background: transparent;    
                font-size:0;
                appearance:none;
                border:none;
                width:100px;
                height:50px;
            }
            .reset-button {
                padding:10px;
                width: auto;
                display: flex;
                border: none;
                background: #fff;
                align-items:center;
                position:absolute;
                bottom:30px;
                right:30px;
                border:1px solid #d3d3d3;
                border-radius:30px;
                box-shadow : 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                transition: 0.3s ease-in;
            }   
            .reset-button img{
                width:24px;
                height:24px;
                margin-right:15px;
            }
            .reset-button:hover{
                background:#d3d3d3;
                transition: 0.3s ease-in;
            }
            .cc-everywhere-iframe {
                z-index: 999999 !important;

            }
            .modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
                z-index: 9999;
                overflow: auto;
            }

            .modal-content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: white;
                padding: 20px;
                border-radius: 10px;
            }
            #customize-modal iframe {
                height: 650px !important
            }
            /* Blur effect for the background */
            .blur-background {
                filter: blur(5px); /* Adjust the blur amount as needed */
            }
            @media screen and (max-width: 1024px) {
                .editing-tools-layout {
                    display: flex;
                    flex-direction: column;
                }
                .editing-tools-btn-group {
                     position: relative;
                         width: 100%;
                             margin-bottom: 25px;
                }
                .upload-image-area {
                    width: 100%;
                }
            }
            @media screen and (max-width: 767px) {
                .upload-image-area .upload-img {
                     margin-top: 0;
                    width: auto;
                    background-size: 40%;
                        Height: 200px;
                }
                .upload-image-area {
                    Height: 360px;
                }
            }
        
        </style>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <div class="editing-tools-layout">

    <div id="image-buttons" class="editing-tools-btn-group">
                <button id="crop-image" class="spectrum-Button spectrum-Button--fill spectrum-Button--accent spectrum-Button--sizeL" >
                    <span class="editing-icon"><image src="../../../../public/img/editor/crop-blue.png" /></span>
                    <span class="spectrum-Button-label">Crop Image</span>
                </button>
                <button id="resize-image" class="spectrum-Button spectrum-Button--fill spectrum-Button--accent spectrum-Button--sizeL" >
                <span class="editing-icon"><image src="../../../../public/img/editor/increase-blue.png" /></span>
                    <span class="spectrum-Button-label">Resize Image</span>
                </button>
                <button id="convert-to-jpg" class="spectrum-Button spectrum-Button--fill spectrum-Button--accent spectrum-Button--sizeL" >
                    <span class="editing-icon"><image src="../../../../public/img/editor/jpg-formate-blue.png" /></span>
                    <span class="spectrum-Button-label">Convert to JPG</span>
                </button>
                <button id="convert-to-png" class="spectrum-Button spectrum-Button--fill spectrum-Button--accent spectrum-Button--sizeL" >
                    <span class="editing-icon"><image src="../../../../public/img/editor/png-formate-blue.png" /></span>
                    <span class="spectrum-Button-label">Convert to PNG</span>
                </button>
                <button id="remove-background" class="spectrum-Button spectrum-Button--fill spectrum-Button--accent spectrum-Button--sizeL" >
                    <span class="editing-icon"><image src="../../../../public/img/editor/background-blue.png" /></span>
                    <span class="spectrum-Button-label">Remove Background</span>
                </button>
                <button id="custom-template-editor" class="spectrum-Button spectrum-Button--outline spectrum-Button--secondary spectrum-Button--sizeL" >
                <span class="editing-icon"><image src="../../../../public/img/editor/edit-image-blue.png" /></span>
                    <span class="spectrum-Button-label">Create Customize template</span>
                </button>
    </div>

    <div class="upload-image-area">
        <input type="file" id="fileInput" accept="image/*" class="upload-img"/>
        <button id="reset" class="reset-button"><image src="../../../../public/img/editor/reset.png" />Reset Image</button>
    </div>
    </div>
    <div id="customize-modal" class="modal">
        <div class="modal-content">
            <iframe id="customize-iframe" width="100%" height="100%" frameborder="0"></iframe>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('js'); ?>
    <script src="<?php echo e(URL::asset('js/CCEverywhere.js')); ?>"></script>
        <script type="text/javascript" >

        (async () => {
            const ccEverywhere = await window.CCEverywhere.initialize({
                clientId: '556e6a3e9fd94fedb9f28cce2bcb4adb',
                appName: 'paraclete'
            });

            var inputFile = document.getElementById('fileInput');

            var encodedImage; 
            var appImage = document.getElementById('image-container');

            inputFile.addEventListener('change', (e) => {
                const reader = new FileReader();
                reader.readAsDataURL(e.target.files[0]);
                reader.onload = () => {
                    encodedImage = reader.result;
                }
                reader.onerror = (error) => {
                    console.log('error', error);
                };
            })

            const exportOptions = [
                {
                    target: 'Editor',
                    id: 'edit-in-express',
                    buttonType: 'native',
                    variant: 'primary',
                    optionType: 'button',
                    label: 'Customize'
                },
                {
                    target: 'Download',
                    id: 'download-button',
                    variant: 'cta',
                    optionType: 'button',
                    buttonType: 'native'
                },
                {
                    target: 'Host',
                    id: 'save-modified-asset',
                    label: 'Save image',
                    optionType: 'button',
                    buttonType: 'custom'
                },
            ];

            const imageCallbacks = {
                onCancel: () => {},
                onPublish: (publishParams) => {
                    const localData = { asset: publishParams.asset[0].data}
                    console.log("Published asset", publishParams)
                    if(publishParams.exportButtonId=="save-modified-asset"){
                        appImage.src = localData.asset;
                        appImage.style.visibility="visible";
                    }
                },
                onError: (err) => {
                    console.error('Error received is', err.toString())
                }
            }

            const openQAwithAsset = (qa_id) => {
                ccEverywhere.openQuickAction({
                    id: qa_id, 
                    inputParams: {
                        asset: {
                            data: encodedImage, 
                            dataType: 'base64', 
                            type: 'image'
                        }, 
                        exportOptions: exportOptions
                    },
                    callbacks: imageCallbacks
                });
            }

            function openCustomizeIframe() {
                if (encodedImage) {
                    openQAwithAsset('custom-template-editor');
                } else {
                    ccEverywhere.createDesign({ 
                        modalParams: {}, 
                        callbacks: { 
                            onCancel: () => {}, 
                            onError: (err) => {}, 
                            onLoadStart: () => {}, 
                            onLoad: () => {}, 
                            onPublishStart: () => {}, 
                            onPublish: (publishParams) => {}, 
                        },
                        outputParams: { 
                            outputType: 'base64'
                        }
                                
                    });
                }
            }

            const modal = document.getElementById('customize-modal');
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.style.display = 'none';
                    document.body.classList.remove('blur-background');
                }
            });

            


            function imageQuickAction(qa_id) {            
                if(encodedImage) {
                    return openQAwithAsset(qa_id);
                } else {
                    ccEverywhere.openQuickAction({
                        id: qa_id, 
                        inputParams: { exportOptions: exportOptions },
                        callbacks: imageCallbacks
                    });
                }
            };

            // Button event listeners 

            let imageButtons = document.querySelectorAll('#image-buttons button');
            imageButtons.forEach((button) => {

                button.addEventListener('click', () => {
                    if (button.id === 'custom-template-editor') {
                        openCustomizeIframe();
                    } else {
                        imageQuickAction(button.id);
                    }
                });

            })
            
            document.getElementById('clear').addEventListener('click', () => {
                appImage.src=null;
                appImage.style.visibility="hidden";
            })

            document.getElementById('reset').addEventListener('click', () => {
                inputFile.value = '';
                encodedImage = null;
                appImage.src = null;
            })
        })();
        </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/user/video/media-editor.blade.php ENDPATH**/ ?>