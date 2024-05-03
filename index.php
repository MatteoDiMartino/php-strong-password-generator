<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<main class="bg-warning">
            
<div class="container">
    <div class="bx-ct">
        <div class="row">
            <div class="col text-center">
                <div class="ms-box-txt pt-4 pb-4 bg-danger text-white">
                    <div class="fs-1 fw-bold">Strong Password Generator</div>
                    <div>Genera una password sicura!</div>
                </div>
            </div>
        </div>
        <div class="ms-main-function bg-success">
            <div class="row">
                <div class="col">
                    <div class="ms-first-f p-4">
                        <span class="fw-bold text-white me-2 ">Lunghezza Password:</span>
                        <div class="pt-4 fw-bold text-white">Consenti ripetizioni di uno o più caratteri:</div>
                    </div>
    
                    <div class="pt-5 px-4 pb-5 mt-5">
                        <button type="submit" class="border-0 bg-danger text-white fw-bold rounded-1 px-2 py-1">Invia</button>
                        <button type="submit" class="border-0 bg-white text-danger fw-bold rounded-1 px-2 py-1">Annulla</button>
                    </div>
                </div>
                <div class="col">
                    <input type="text" class="border-0 rounded-1 m-4">
                    <div class="ms-4">
                            <div>
                                <input type="radio" name="opzione" id="approvato" />
                                <label for="approvato">Si</label>
    
                            </div>
                            <div>
                                <input type="radio" name="opzione" id="disapprovato" />
                                <label for="disapprovato">No</label>
    
                            </div>
    
                            <div class="ms-check pt-4">
                                <div>
                                    <input type="checkbox" name="more" id="additivi">
                                    <label for="additivi">Lettere</label>
                                </div>
                                
        
                                <div>
                                    <input type="checkbox" name="more" id="additivi">
                                    <label for="additivi">Numeri</label>
                                </div>
        
        
                                <div>
                                    <input type="checkbox" name="more" id="additivi">
                                    <label for="additivi">Simboli</label>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
    </div>
    </div>
</main>





</body>
</html>

<style>
    main {
        width: 100vw;
        height: 100vh;
        overflow: hidden;
        display: flex;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }


</style>