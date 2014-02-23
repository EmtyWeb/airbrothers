<section id="question">
    <div class="question">
    <h1><a href="<?php echo URL;?>">Портфолио</a> / <span>Спросить</span></h1>
        <form method="post" id="question_form" action="<?php echo URL;?>account/news_create" enctype="multipart/form-data">
            <div class="question_first"><label for="fio">Введите ваше имя / имя организации</label></div>
            <div><input type="text" class="order_input" name="fio" id="fio"
                        placeholder="" value="" required/></div>
            <div class="question_first"><label for="mail">Введите ваш email</label></div>
            <div><input type="text" class="order_input" name="mail" id="mail"
                        placeholder="" value="" required/></div>
            <div class="question_first"><label for="desc">Задайте вопрос</label></div>
            <div><textarea type="text" class="order_input" name="desc"
                           value="" required/></textarea></div>
			<div class="q_down">
				<p>Вы получите ответ в виде письма на ваш email адрес</p>
				<div class="quest_b"><input  type="submit" value="Отправить"/></div>
			</div>
        </form>
    </div>
</section>
