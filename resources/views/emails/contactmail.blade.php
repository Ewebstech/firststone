<html>
<body style='background-color: #fff; padding: 50px; '>	
        <center>		
            <table cellpadding='10' border='0' width='700'style='border: 1px solid #000' >
            <tr style='background-color: #7c8385;'>
            <td width='30%' colspan='4' align='center'>
            <img src='".$logo_url."' width='auto' height='60' style='background: #fff; padding: 10px;'/>
            </td>
            
            </tr>
            
            <tr>
            <td style='color: #fff; font-weight: bolder; background-color: #7c8385;' colspan='3' align='center'> Subject</td>
            </tr>
            <tr>
            <td style='color: #000; background-color: #fff;' colspan='3' align='left'>
                {{$userEmail}}
                <br>
                {{$subject}}
                <br>
                {{$message}}
            </td>
            </tr>
            <tr>
            <td style='color: #fff; background-color: #7c8385;' colspan='3' align='center'>| Powered by <a href='http://ewebstech.xyz'>Ewebstech.XYZ</a> </td>
            </tr>
            
            </table>
        </center>	
    </body>
</html>