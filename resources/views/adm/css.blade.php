<style>
.image {
    opacity: 1;
    display: block;
    width: 120px;
    height: 150px;
    transition: .5s ease;
    backface-visibility: hidden;
    position: relative;
}

.middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 45%;
    left: 20%;
    transform: translate(-48%, -50%);
    text-align: center;
}

.input {
    display: none;
}

.kata {
    color: black;
    font-size: small;
    padding: 16px 32px;
    position: relative;
    left: 35px;
    top: 12px
}

.foto {
    position: relative;
    left: 90px;
    width: 121px;
    margin: 0;
}

.foto:hover .image {
    opacity: 0.3;
}

.foto:hover .middle {
    opacity: 1;
}
</style>
