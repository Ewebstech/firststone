@include('emails.layout.mailheader')   
<tr>
<td style='color: #fff; font-weight: bolder; background-color: #7c8385;' colspan='3' align='center'> {{$Subject}}</td>
</tr>
<tr>
<td style='color: #000; background-color: #fff;' colspan='3' align='left'>
    <p>
   Hello {{$Name}},
    </p>
    <p>A big welcome to you from all of us @ First Stone Real Estate Limited. We assure you a wonderful time with us. </p>
    <p>For your rememberance, here are you login details:
        <table>
            <tr>
                <td>Username</td><td>{{$Username}}</td>
            </tr>
            <tr>
                <td>Password</td><td>*********</td>
            </tr>
        </table>
    </p>
    <p>You can log in by clicking <a href="#">Here</a>. Please do have nice day.</p>
</td>
</tr>
@include('emails.layout.mailfooter')   