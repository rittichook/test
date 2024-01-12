<style>

/* .con{
    height: 85vh;
} */
*{
    font-family: 'Noto Sans Thai', sans-serif;
}
    /* animation */
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    #animation {
        opacity: 0;
        animation: fadeIn 1s forwards;
    }




    .modal-backdrop.show {
        opacity: 0;
    }
    .modal-dialog {
        max-width: 100%;
        margin: 0;
        /* margin-left: 300px; */
        margin: 1rem 1rem 1rem 18rem;
    }
    .modal-content {
        padding: 2%;
        height: auto;
    }
    .modal-backdrop {
        position: unset;
    }
    .modal-body {
    position: none;
    flex: none;
    padding: none;
}
#editor img {
                    max-width: 300px;
                    max-height: 200px;
                }
                .ql-snow .ql-editor img {
                    max-width: 10%;
                }


                /* .navbar-vertical.bg-white .navbar-nav>.nav-item .nav-link.active {
    background-color: #003569;
    box-shadow: none;
    color: white;

} */
</style>
