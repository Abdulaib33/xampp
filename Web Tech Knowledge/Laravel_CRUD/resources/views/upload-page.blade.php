<!--
    Form Tag:
    - The form is used to collect user input and send it to the server.
    - `action`: Specifies the URL where the form data will be submitted.
    - `method`: Specifies the HTTP method to use when submitting the form (e.g., GET, POST).
    - `enctype`: Specifies how the form data should be encoded when submitting it to the server.
-->
<form action="{{ route('/upload.data') }}" method="POST" enctype="multipart/form-data">

    <!--
        CSRF Token:
        - Laravel uses CSRF (Cross-Site Request Forgery) tokens to protect against malicious attacks.
        - The `@csrf` directive generates a hidden input field with a CSRF token.
        - This token is automatically validated by Laravel when the form is submitted.
    -->
    @csrf

    <!--
        Input Fields:
        - Each input field collects specific data from the user.
        - `name`: The name of the input field, which is used to identify the data on the server.
        - `id`: A unique identifier for the input field (used for accessibility and JavaScript).
        - `type`: Specifies the type of input (e.g., text, email, file).
    -->
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>

    <div>
        <label for="file">Photo</label>
        <input type="file" name="file" id="file">
    </div>

    <!--
        Submit Button:
        - The submit button sends the form data to the server.
        - `type="submit"`: Specifies that this button submits the form.
        - `value`: The text displayed on the button.
        - `name`: The name of the button (optional, used if you want to handle button-specific logic on the server).
    -->
    <input type="submit" value="Submit" name="submit">

</form>