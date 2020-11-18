<?php
    require_once("server/backend/constantes.php");
    session_start();

    $title = "Калькулятор";
    $js_linked = [ "assets/js/calculator.js" ];
?>

<?php require_once("server/modules/header.php"); ?>

<main>    
    <div class="container">
        <form class="w-50 ml-auto mr-auto mt-5">
            <label for="InputValue">Введите значение</label>
            <div class="row">
                <div class="col-10">
                    <input type="text" class="form-control w-80" id="InputValue" placeholder="=">
                </div>
                <div class="col">
                    <button class="btn w-100 h-100 delete"><</button>
                </div>
            </div>
            <small id="result" class="form-text text-muted mb-5">Ответ: <span></span></small>
            <div class="row">
                <div class="col"><button class="btn w-100 h-100 number" data-value="1">1</button></div>
                <div class="col"><button class="btn w-100 h-100 number" data-value="2">2</button></div>
                <div class="col"><button class="btn w-100 h-100 number" data-value="3">3</button></div>
                <div class="col"><button class="btn w-100 h-100 operator" data-value="+">+</button></div>
            </div>
            <div class="row">
                <div class="col"><button class="btn w-100 h-100 number" data-value="4">4</button></div>
                <div class="col"><button class="btn w-100 h-100 number" data-value="5">5</button></div>
                <div class="col"><button class="btn w-100 h-100 number" data-value="6">6</button></div>
                <div class="col"><button class="btn w-100 h-100 operator" data-value="-">-</button></div>
            </div>
            <div class="row">
                <div class="col"><button class="btn w-100 h-100 number" data-value="7">7</button></div>
                <div class="col"><button class="btn w-100 h-100 number" data-value="8">8</button></div>
                <div class="col"><button class="btn w-100 h-100 number" data-value="9">9</button></div>
                <div class="col"><button class="btn w-100 h-100 operator" data-value="*">*</button></div>
            </div>
            <div class="row">
                <div class="col"><button class="btn w-100 h-100 operator">.</button></div>
                <div class="col"><button class="btn w-100 h-100 number" data-value="0">0</button></div>
                <div class="col"><button class="btn w-100 h-100 number" data-value="00">00</button></div>
                <div class="col"><button class="btn w-100 h-100 operator" data-value="/">/</button></div>
            </div>
            <div class="row">
                <div class="col"><button class="btn w-100 h-100 operator" data-value="(">(</button></div>
                <div class="col"><button class="btn w-100 h-100 operator" data-value=")">)</button></div>
                <div class="col">
                    <button class="btn w-100 h-100 take_result">=</button>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <button class="btn btn-primary h-100 w-100 take_result_php">Решение через php</button>
                </div>
            </div>
        </form>
    </div>

</main>

<?php require_once("server/modules/footer.php"); ?>