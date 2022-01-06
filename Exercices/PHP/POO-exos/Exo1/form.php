<?php

class Form
{

    public function entryForm()
    {
        return "<form action='index.php' method='post'><br>";
    }

    public function select()
    {
        return "<select name='choices'>
                    <option value=''>Please pick your choice</option>
                    <option value='one'>One</option>
                    <option value='two'>Two</option>
                    <option value='three'>Three</option>
                </select><br>";
    }

    public function textArea()
    {
        return "<textarea name='explain' row='10' cols='30' placeholder='Explain your choice'></textarea><br>";
    }

    public function radioBtn()
    {
        return "<input type='radio' name='js' 'value='javascript'>
            <label for='js'>Javascript</label><br>
            <input type='radio' name='php' 'value='php'>
            <label for='php'>PHP</label><br>";
    }

    public function checkbox()
    {
        return "<input type='checkbox' name='bootstrap' 'value='bootsrap'>
            <label for='bootstrap'>Bootstrap</label><br>
            <input type='checkbox' name='bulma' 'value='bulma'>
            <label for='bulma'>Bulma</label><br>";
    }

    public function input()
    {
        return '<input type="text" name="username"><br>';
    }

    public function submit()
    {
        return '<button type="submit">Envoyer</submit><br>';
    }

    public function endForm()
    {
        return "</form>";
    }
}
