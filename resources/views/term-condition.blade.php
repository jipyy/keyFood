<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/terms.css') }}">
    <script src="https://kit.fontawesome.com/3ef3559250.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <section class="flex_center">
        <div class="tc_main">
            <div class="tc_content">
                <div class="tc_top">
                    <div class="icon">
                        <i class="fa-solid fa-clipboard"></i>
                    </div>
                    <div class="title">
                        <p>Terms of serivce</p>
                    </div>
                    <div class="info">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi sint veritatis recusandae alias.
                        Numquam voluptates inventore eligendi totam tempore quia et enim accusantium labore at autem
                        unde quibusdam molestiae doloremque corrupti architecto blanditiis corporis ex quisquam quo,
                        deleniti pariatur? Illo, cum. Dignissimos provident quod ducimus aperiam sunt expedita odit
                        laboriosam!
                    </div>
                </div>
                <div class="tc_bottom">
                    <div class="title">
                        <p>please go through the terms before Accepting it.</p>
                    </div>
                    <div class="info">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, cupiditate incidunt? Id, sed
                            alias. Praesentium modi facilis ea exercitationem adipisci! Possimus aspernatur doloribus id
                            cumque nulla tempora obcaecati nihil tenetur?</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, cupiditate incidunt? Id, sed
                            alias. Praesentium modi facilis ea exercitationem adipisci! Possimus aspernatur doloribus id
                            cumque nulla tempora obcaecati nihil tenetur?</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, cupiditate incidunt? Id, sed
                            alias. Praesentium modi facilis ea exercitationem adipisci! Possimus aspernatur doloribus id
                            cumque nulla tempora obcaecati nihil tenetur?</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, cupiditate incidunt? Id, sed
                            alias. Praesentium modi facilis ea exercitationem adipisci! Possimus aspernatur doloribus id
                            cumque nulla tempora obcaecati nihil tenetur?</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, cupiditate incidunt? Id, sed
                            alias. Praesentium modi facilis ea exercitationem adipisci! Possimus aspernatur doloribus id
                            cumque nulla tempora obcaecati nihil tenetur?</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, cupiditate incidunt? Id, sed
                            alias. Praesentium modi facilis ea exercitationem adipisci! Possimus aspernatur doloribus id
                            cumque nulla tempora obcaecati nihil tenetur?</p>
                    </div>
                </div>
            </div>
            <div class="tc_btns">
                <button class="accept" onclick="window.history.back();">
                    Accept
                </button>
                <form method="POST" action="{{ route('logout') }}" style="display: inline-flex">
                    @csrf
                    <a href="/logout" onclick="event.preventDefault();
this.closest('form').submit();">
                        <button class="decline">
                            Decline
                        </button>
                    </a>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
