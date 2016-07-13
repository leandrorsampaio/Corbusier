<?php
if (is_home()) {
    $classLiga = '';
} else {
    $classLiga = 'menuBall-ON menuBall-single';
}
?>

<div class="menuBall <?php echo $classLiga; ?>">
    <div class="menuBall_icon">
        <div class="menuBall_icon_btn">
            <i class="fa fa-bars"></i>
        </div>
        <div class="menuBall_icon_nav">
            <ul>
                <li class="first">
                    <a class="menuBall_icon_nav-link" href="#about">Informações</a>
                </li>
                <li>
                    <a class="menuBall_icon_nav-link" href="#experience">Formação e Experiência</a>
                </li>
                <li>
                    <a class="menuBall_icon_nav-link" href="#skills">Habilidades</a>
                </li>
                <li>
                    <a class="menuBall_icon_nav-link" href="#projects">Projetos</a>
                </li>
                <li class="last">
                    <a class="menuBall_icon_nav-link" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(".menuBall_icon_btn").click(function () {
        $(".menuBall_icon_nav").toggleClass("menuBall_icon_nav-aberto", 1000);
    });
    $(".menuBall_icon_nav-link").click(function () {
        $(".menuBall_icon_nav").toggleClass("menuBall_icon_nav-aberto", 1000);
    });
</script>
