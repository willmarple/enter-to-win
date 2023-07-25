<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enter the Giveaway</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    </head>
    <body>

        <section class="section">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-half">
                        @if (session('status'))
                            <div class="notification is-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="columns is-multiline">
                            <!-- Image Column -->
                            <div class="column is-full-mobile is-half-desktop">
                                <div class="box">
                                    <img src="{{asset('/assets/images/tf-book.png')}}" alt="">
                                </div>
                            </div>
                            <!-- Form Column -->
                            <div class="column is-full-mobile is-half-desktop">
                                <div class="box">
                                    <h1 class="title has-text-centered">Enter the Giveaway</h1>
                                    <form action="/entry" method="POST">
                                        @csrf
                                        <div class="field">
                                            <label class="label" for="first_name">First Name</label>
                                            <div class="control">
                                                <input class="input" type="text" id="first_name" name="first_name"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="label" for="last_name">Last Name</label>
                                            <div class="control">
                                                <input class="input" type="text" id="last_name" name="last_name"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="label" for="email">Email address</label>
                                            <div class="control">
                                                <input class="input" type="email" id="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="field is-grouped">
                                            <div class="control">
                                                <button type="submit" class="button is-link">Enter Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
