<section id="order">
    <h1><a href="<?php echo URL;?>">Портфолио</a> / <span>Заказать</span></h1>
    <article class="air_order">
        <header>
            <h2>Онлайн заявка на услугу</h2>
        </header>
        <p>Стать нашим клиентом очень просто. Для этого нужно внимательно прочитать эту страницу.
            Начнем с технического задания (ТЗ). Это текстовый документ (.docx), в котором Вам предстоит ответить
            на ряд вопросов. Техническое задание необходимо дизайнеру, чтобы детально ознакомиться с Вашим
            проектом. Вам, как заказчику, очент важно отнестись к заданию ответственно. Чем точнее будут ответы
            на поставленные вопросы, тем быстрее и лучше будут проходить работы.</p>
        <p>Чтобы перейти к заполнению ТЗ, кликнете по кнопке, которая находится ниже.</p>
        <div class="download">
            <p>Техническое задание</p>
            <a href="<?php echo URL;?>order/save?filename=file.doc"></a>
        </div>
    </article>
    <div class="air_order_info">
    <p>Осталось всего ничего.
        Заполните онлайн заявку и прикрепите
        к нему ТЗ или отправте на наш почтовый адрес air_b@mail.ru</p>
        <form method="post" id="order_form" action="<?php echo URL;?>order/loadFile" enctype="multipart/form-data">
            <div class="contact_first"><label for="fio">Контактное лицо</label></div>
            <div><input type="text" class="order_input" name="fio" id="fio"
                        placeholder="" value="" required/></div>
            <div class="contact_first"><label for="mail">Электронная почта</label></div>
            <div><input type="text" class="order_input" name="mail" id="mail"
                        placeholder="" value="" required/></div>
			<div class="contact_first"><label for="mail">Телефон / Skype</label></div>
            <div><input type="text" class="order_input" name="mail" id="mail"
                        placeholder="" value="" required/></div>
			
			<div class="check">
				<div>Услуги</div>
				<div>
											<input type="checkbox" id="check1" />
					<label class="checkbox" for="check1"><span></span>Создание сайта</label>
								<input type="checkbox" id="check2" />
					<label class="checkbox" for="check2"><span></span>Создание дизайн макета/шаблонов</label>
								<input type="checkbox" id="check3" />
					<label class="checkbox" for="check3"><span></span>Разработка логотипа</label>
								<input type="checkbox" id="check4" />
					<label class="checkbox" for="check4"><span></span>Разработка фирменного стиля</label>
								<input type="checkbox" id="check5" />
					<label class="checkbox" for="check5"><span></span>Оптимизация и продвижение</label>
				</div>
			</div>				
			<div class="check_tz">
				<p>Прикрепить Техническое задание (ТЗ)</p>				
				<div id="wrapper">
				<label class='filed' for="file"></label>
					<input id="file" type="file" value="Прикрепить"/>
				</div>
			</div>
		
			
			
			<div class="check_dop">
            <div class="contact_first"><label for="desc">Дополнительная информация</label></div>
            <div><textarea type="text" class="order_input" name="desc"
                                         value="" required/></textarea></div>
			</div>
            <div class="order_create"><input  type="submit" value="Отправить"/></div>

        </form>
    </div>
</section>

