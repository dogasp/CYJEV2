<!DOCTYPE html>

<body>
    <table id="zs-output-sig" style="
            font-family: Verdana, Geneva, sans-serif;
            line-height: 17px;
            font-size: 14px;
            padding: 0px;
            border-spacing: 0px;
            margin: 0px;
            border-collapse: collapse;
            width: 450px;
        " cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span style="
                                                    font-family: Arial, Helvetica, sans-serif;
                                                    font-size: 23px;
                                                    font-style: normal;
                                                    line-height: 25px;
                                                    font-weight: bold;
                                                    color: #515151;
                                                "><?php echo htmlspecialchars($_POST['nom']); ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span style="
                                                font-family: Verdana, Geneva, sans-serif;
                                                    font-weight: bold;
                                                    color: #0036B5;
                                                "><?php echo htmlspecialchars($_POST['role']); ?></br> CY Junior Engineering</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>

                            <td style="line-height: 0px">
                                <img alt="" src="https://bit.ly/3vFmT0l" width="204" height="91" />
                                <!-- image logo -->
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="line-height: 0px;padding-bottom: 10px">
                    <img alt="" src="https://bit.ly/2Zc4pZp" width="400" height="2" /> <!-- Image transition -->
                </td>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <img src="https://bit.ly/2Z4FQxA" width="98" height="85" /> <!-- Image logo -->
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <span style="font-style: italic;color: #0036B5;font-family: Verdana, Geneva, sans-serif;">Téléphone :</span>
                                            <span style="color: #515151;margin-bottom: 4px;"><?php echo htmlspecialchars($_POST['telephone']); ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span style="font-style: italic;color: #0036B5;font-family: Verdana, Geneva, sans-serif;">Email :</span>
                                            <span style="color: #515151;margin-bottom: 4px;"><?php echo htmlspecialchars($_POST['mail']); ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span style="font-style: italic;color: #0036B5;font-family: Verdana, Geneva, sans-serif;">Adresse :</span>
                                            <span style="color: #515151;margin-bottom: 4px;font-family: Verdana, Geneva, sans-serif;"><?php echo htmlspecialchars($_POST['adresse']); ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="https://bit.ly/3jhrO2x" width="292" height="2" />
                                            <!-- image transition -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a target="_blank" href="https://www.cyje.fr/">
                                                <img alt="website" src="https://bit.ly/3n7NuPI" width="24" height="24"/></a>
                                            <!-- image site -->
                                            <span style="padding-right: 9px"></span>
                                            <a target="_blank" href="https://www.facebook.com/CYJuniorEngineering/">
                                                <img alt="facebook" src="https://bit.ly/3G3Wm1q" width="24" height="24"/></a>
                                            <!-- image facebook -->
                                            <span style="padding-right: 9px"></span>
                                            <a target="_blank" rel="nofollow"
                                                href="https://www.linkedin.com/company/3339569">
                                                <img alt="linkedin" src="https://bit.ly/3vtC3FD" width="24" height="24"/></a>
                                            <!--image linkedin -->
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                <td>
            </tr>
        </tbody>
    </table>
</body>

</html>
