<script>

$(window).on('load', function () {
var $preloader = $('#page-preloader'),
$spinner   = $preloader.find('.spinner');
$spinner.fadeOut();
$preloader.delay(350).fadeOut('slow');
});
</script>	
	<style>
        #page-preloader {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background: #003333;
            z-index: 100500;
			-moz-box-shadow: inset 0 0 60px rgba(0,0,0,0.9); /* ��� Firefox */
    -webkit-box-shadow: inset 0 0 60px rgba(0,0,0,0.9); /* ��� Safari � Chrome */
    box-shadow: inset 0 0 60px rgba(0,0,0,0.5); /* ��������� ���� */
        }

        #page-preloader .spinner {
            width: 128px;
            height: 128px;
            position: absolute;
            left: 50%;
            top: 50%;
            background: url('/style/images/495.gif') no-repeat 50% 50%;
            margin: -56px 0 0 -56px;
        }
    </style>