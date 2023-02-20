<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .ball {
        animation: float612 2.4s ease-in-out infinite;
        height: 103px;
        width: 100px;
        position: absolute;
    }

    @keyframes float612 {
        0% {
            transform: translatey(0px);
        }

        50% {
            transform: translatey(-50px);
        }

        100% {
            transform: translatey(0px);
        }
    }

    .shadow {
        background: #DB9EDF;
        width: 80px;
        height: 25px;
        top: 65%;
        position: absolute;
        animation: expand6234 2.4s ease-in-out infinite;
        border-radius: 50%;
    }

    @keyframes expand6234 {

        0%,
        100% {
            transform: scale(0.6);
        }

        50% {
            transform: scale(0.3);
            filter: blur(5px);
        }
    }
</style>
<div class="container">
    <img class="ball" src="img/kominfo-seeklogo.png" alt="">
    <div class="shadow"></div>
</div>