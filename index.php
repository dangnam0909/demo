<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <?php 
        // include ("./header.php");
    ?>
    <main>
        <section id="section__title">
            <div class="container">
                <h2 class="about_title">お知らせ</h2>
                <p class="p_text">
                    The human in-the-loop process is a way to generate features using domain experts. Using domain
                    experts to come up with features is not a novel concept. However, the specific interfaces and method
                    which helps the domain experts create the features are most likely novel.
                    In this case the features the experts create are equivalent to regular expressions. Removing
                    non-alphabetical characters and matching on "smokesppd" is equal to the regular expression
                    /smokes[^a-zA-Z]*ppd/. Using regular expressions as features for text classification is not novel.
                    Given these features the classifier is a manually set threshold by the authors, decided by the
                    performance on a set of documents. This is a classifier, it's just that the parameters of the
                    classifier, in this case a threshold, is set manually. Given the same features and documents almost
                    any machine learning algorithm should be able to find the same threshold or (more likely) a better
                    one.
                    The authors note that using support vector machines (SVM) and hundreds of documents give inferior
                    performance, but does not specify which features or documents the SVM was trained/tested on. A fair
                    comparison would use the same features and document sets as those used by the manual threshold
                    classifier.
                </p>
            </div>
        </section>
        <section id="section__about">
            <div class="container">
                <h2 class="about_title">STUDIO</h2>
                <ul id="scroller">
                    <li>
                        <a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/ikebukuro1.jpeg"
                                width="290" height="200" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/ikebukuro2.jpeg"
                                width="290" height="200" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/ikebukuro3.jpeg"
                                width="290" height="200" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/ikebukuro4.jpeg"
                                width="290" height="200" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/img_101.jpg"
                                width="290" height="200" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#"><span class="herehover">新宿スタジオ</span><img src="assets/img/studio/img_102.jpg"
                                width="290" height="200" alt="">
                        </a>
                    </li>
                </ul>
                <a href="#" class="btn btn_readmore readmore_v1"><span>READMORE</span></a>
            </div>
        </section>
        <section id="section__outservice">
            <div class="container">
                <h2 class="about_title">診療案内</h2>
                <p class="p_text">
                    The human in-the-loop process is a way to generate features using domain experts. Using domain
                    experts to come up with features is not a novel concept. However, the specific interfaces and method
                    which helps the domain experts create the features are most likely novel.
                    In this case the features the experts create are equivalent to regular expressions. Removing
                    non-alphabetical characters and matching on "smokesppd" is equal to the regular expression
                    /smokes[^a-zA-Z]*ppd/. Using regular expressions as features for text classification is not novel.
                    Given these features the classifier is a manually set threshold by the authors, decided by the
                    performance on a set of documents. This is a classifier, it's just that the parameters of the
                    classifier, in this case a threshold, is set manually. Given the same features and documents almost
                    any machine learning algorithm should be able to find the same threshold or (more likely) a better
                    one.
                    The authors note that using support vector machines (SVM) and hundreds of documents give inferior
                    performance, but does not specify which features or documents the SVM was trained/tested on. A fair
                    comparison would use the same features and document sets as those used by the manual threshold
                    classifier.
                </p>

                <!-- <p class="about_description">
                    <?php 
                        $cars = array (
                            array("Volvo", 22, 18),
                            array("BMW", 15, 13),
                            array("Saab", 5, 2),
                            array("Land Rover", 17, 15)
                        );
                        for ($row = 0; $row < 4; $row++) 
                        { 
                            echo "<p><b>Row number $row</b></p>"; 
                            echo "<ul>" ; 
                            for ($col=0; $col < 3; $col++) { 
                                echo "<li>" .$cars[$row][$col]."</li>";
                            }
                            echo "</ul>";
                        }
                        echo "<p><a>Total: $row + $col </a></p>";
                    ?>
                </p> -->

            </div>
        </section>
        <section id="section__content">
            <div class="container">
                <h2 class="about_title">予約</h2>
                <form action="./mail_send/" id="mail-form" method="post" class="wpcf7-form init" novalidate="novalidate"
                    data-status="init">
                    <div class="form mt-10">
                        <table>
                            <tbody>
                                <tr>
                                    <th>ご希望商品<span class="required">必須</span></th>
                                    <td class="u-selectBox">
                                        <span class="wpcf7-form-control-wrap menu-121">
                                            <select name="menu_121"
                                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false">
                                                <option value="">----</option>
                                                <option value="Aプラン -¥34,000-">Aプラン -¥34,000-</option>
                                                <option value="Bプラン -¥49,000-">Bプラン -¥49,000-</option>
                                                <option value="Cプラン -¥80,000-">Cプラン -¥80,000-</option>
                                                <option value="Dプラン -¥120,000-">Dプラン -¥120,000-</option>
                                            </select></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>名前<span class="required">必須</span></th>
                                    <td><span class="wpcf7-form-control-wrap your-name">
                                            <input type="text" name="your_name" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"></span></td>
                                </tr>
                                <tr>
                                    <th>フリガナ<span class="required">必須</span></th>
                                    <td><span class="wpcf7-form-control-wrap your-kana">
                                            <input type="text" name="your_kana" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"></span></td>
                                </tr>
                                <tr>
                                    <th>携帯電話番号<span class="required">必須</span></th>
                                    <td>
                                        <span class="wpcf7-form-control-wrap tel-152">
                                            <input type="tel" name="tel_152" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="※ハイフンは不要です。"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>生年月日<span class="required">必須</span></th>
                                    <td class="u-selectBox birthday__select">
                                        <div class="year">
                                            <span class="wpcf7-form-control-wrap menu-210 ">
                                                <select name="menu_210"
                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required birthday_group"
                                                    aria-required="true" aria-invalid="false">
                                                    <option value="">---</option>
                                                    <option value="1920">1920</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="month">
                                            <span class="wpcf7-form-control-wrap menu-209 ">
                                                <select name="menu_209"
                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required birthday_group"
                                                    aria-required="true" aria-invalid="false">
                                                    <option value="">---</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select></span>
                                        </div>
                                        <div class="day">
                                            <span class="wpcf7-form-control-wrap menu-208 birthday_group">
                                                <select name="menu_208"
                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required birthday_group"
                                                    aria-required="true" aria-invalid="false">
                                                    <option value="">---</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select></span>
                                        </div>
                                        <input type="text" id="birthday" class="hide">
                                        <label for="birthday" class="error"></label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>年齢<span class="required">必須</span></th>
                                    <td class="u-selectBox">
                                        <span class="wpcf7-form-control-wrap menu_207">
                                            <select name="menu_207"
                                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false">
                                                <option value="">---</option>
                                                <option value="２１歳">２１歳</option>
                                                <option value="２２歳">２２歳</option>
                                                <option value="２３歳">２３歳</option>
                                                <option value="２４歳">２４歳</option>
                                                <option value="２５歳">２５歳</option>
                                                <option value="２６歳">２６歳</option>
                                                <option value="２７歳">２７歳</option>
                                                <option value="２８歳">２８歳</option>
                                                <option value="２９歳">２９歳</option>
                                                <option value="３０歳">３０歳</option>
                                                <option value="３１歳">３１歳</option>
                                                <option value="３２歳">３２歳</option>
                                                <option value="３３歳">３３歳</option>
                                                <option value="３４歳">３４歳</option>
                                                <option value="３５歳">３５歳</option>
                                                <option value="３６歳">３６歳</option>
                                                <option value="３７歳">３７歳</option>
                                                <option value="３８歳">３８歳</option>
                                                <option value="３９歳">３９歳</option>
                                                <option value="４０歳">４０歳</option>
                                                <option value="４１歳">４１歳</option>
                                                <option value="４２歳">４２歳</option>
                                                <option value="４３歳">４３歳</option>
                                                <option value="４４歳">４４歳</option>
                                                <option value="４５歳">４５歳</option>
                                                <option value="４６歳">４６歳</option>
                                                <option value="４７歳">４７歳</option>
                                                <option value="４８歳">４８歳</option>
                                                <option value="４９歳">４９歳</option>
                                                <option value="５０歳">５０歳</option>
                                                <option value="５１歳">５１歳</option>
                                                <option value="５２歳">５２歳</option>
                                                <option value="５３歳">５３歳</option>
                                                <option value="５４歳">５４歳</option>
                                                <option value="５５歳">５５歳</option>
                                                <option value="５６歳">５６歳</option>
                                                <option value="５７歳">５７歳</option>
                                                <option value="５８歳">５８歳</option>
                                                <option value="５９歳">５９歳</option>
                                                <option value="６０歳">６０歳</option>
                                                <option value="６１歳">６１歳</option>
                                                <option value="６２歳">６２歳</option>
                                                <option value="６３歳">６３歳</option>
                                                <option value="６４歳">６４歳</option>
                                                <option value="６５歳">６５歳</option>
                                                <option value="６６歳">６６歳</option>
                                                <option value="６７歳">６７歳</option>
                                                <option value="６８歳">６８歳</option>
                                                <option value="６９歳">６９歳</option>
                                                <option value="７０歳以上">７０歳以上</option>
                                            </select></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>住所<span class="required">必須</span></th>
                                    <td><span class="wpcf7-form-control-wrap text-258">
                                            <input type="text" name="text_258" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"></span></td>
                                </tr>
                                <tr>
                                    <th>自宅番号</th>
                                    <td><span class="wpcf7-form-control-wrap text-30511"><input type="tel"
                                                name="text_30511" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                aria-invalid="false" placeholder="※ハイフンは不要です。"></span></td>
                                </tr>
                                <tr>
                                    <th>メールアドレス<span class="required">必須</span></th>
                                    <td>
                                        <span class="wpcf7-form-control-wrap email-248"><input type="email"
                                                name="email_248" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>勤務先名<span class="required">必須</span></th>
                                    <td>
                                        <span class="wpcf7-form-control-wrap company"><input type="text" name="company"
                                                value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>勤務先番号<span class="required">必須</span></th>
                                    <td>
                                        <span class="wpcf7-form-control-wrap tel-company"><input type="tel"
                                                name="tel_company" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="※ハイフンは不要です。"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>勤務先住所<span class="required">必須</span></th>
                                    <td>
                                        <span class="wpcf7-form-control-wrap company-adress">
                                            <input type="text" name="company_adress" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>雇用形態<span class="required">必須</span></th>
                                    <td class="u-selectBox">
                                        <span class="wpcf7-form-control-wrap menu-015">
                                            <select name="menu_015"
                                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false">
                                                <option value="">---</option>
                                                <option value="正社員">正社員</option>
                                                <option value="契約社員">契約社員</option>
                                                <option value="派遣社員">派遣社員</option>
                                                <option value="アルバイト・パート">アルバイト・パート</option>
                                                <option value="その他">その他</option>
                                            </select></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>勤続年数<span class="required">必須</span></th>
                                    <td class="u-selectBox">
                                        <span class="wpcf7-form-control-wrap menu-014">
                                            <select name="menu_014"
                                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false">
                                                <option value="">---</option>
                                                <option value="１年未満">１年未満</option>
                                                <option value="２年">２年</option>
                                                <option value="３年">３年</option>
                                                <option value="４年">４年</option>
                                                <option value="５年">５年</option>
                                                <option value="６年">６年</option>
                                                <option value="７年">７年</option>
                                                <option value="８年">８年</option>
                                                <option value="９年">９年</option>
                                                <option value="１０年以上">１０年以上</option>
                                            </select></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>手取り月収<span class="required">必須</span></th>
                                    <td class="u-selectBox">
                                        <span class="wpcf7-form-control-wrap menu-013">
                                            <select name="menu_013"
                                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false">
                                                <option value="">---</option>
                                                <option value="１万円未満">１万円未満</option>
                                                <option value="２万円">２万円</option>
                                                <option value="３万円">３万円</option>
                                                <option value="４万円">４万円</option>
                                                <option value="５万円">５万円</option>
                                                <option value="６万円">６万円</option>
                                                <option value="７万円">７万円</option>
                                                <option value="８万円">８万円</option>
                                                <option value="９万円">９万円</option>
                                                <option value="１０万円">１０万円</option>
                                                <option value="１１万円">１１万円</option>
                                                <option value="１２万円">１２万円</option>
                                                <option value="１３万円">１３万円</option>
                                                <option value="１４万円">１４万円</option>
                                                <option value="１５万円">１５万円</option>
                                                <option value="１６万円">１６万円</option>
                                                <option value="１７万円">１７万円</option>
                                                <option value="１８万円">１８万円</option>
                                                <option value="１９万円">１９万円</option>
                                                <option value="２０万円">２０万円</option>
                                                <option value="２１万円">２１万円</option>
                                                <option value="２２万円">２２万円</option>
                                                <option value="２３万円">２３万円</option>
                                                <option value="２４万円">２４万円</option>
                                                <option value="２５万円">２５万円</option>
                                                <option value="２６万円">２６万円</option>
                                                <option value="２７万円">２７万円</option>
                                                <option value="２８万円">２８万円</option>
                                                <option value="２９万円">２９万円</option>
                                                <option value="３０万円以上">３０万円以上</option>
                                            </select></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>給与支給方法<span class="required">必須</span></th>
                                    <td class="u-selectBox">
                                        <span class="wpcf7-form-control-wrap menu-012">
                                            <select name="menu_012"
                                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false">
                                                <option value="">---</option>
                                                <option value="振込">振込</option>
                                                <option value="手渡し">手渡し</option>
                                                <option value="その他">その他</option>
                                            </select></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>緊急連絡先名前<span class="required">必須</span></th>
                                    <td><span class="wpcf7-form-control-wrap kikyu-name">
                                            <input type="text" name="kikyu_name" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"></span></td>
                                </tr>
                                <tr>
                                    <th>緊急連絡先関係<span class="required">必須</span></th>
                                    <td><span class="wpcf7-form-control-wrap kankei"><input type="text" name="kankei"
                                                value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"></span></td>
                                </tr>
                                <tr>
                                    <th>緊急連絡先番号<span class="required">必須</span></th>
                                    <td><span class="wpcf7-form-control-wrap tel-kinkyu">
                                            <input type="tel" name="tel_kinkyu" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                aria-required="true" aria-invalid="false"
                                                placeholder="※ハイフンは不要です。"></span></td>
                                </tr>
                                <tr>
                                    <th>現在利用中の他業者名<span class="required">必須</span></th>
                                    <td><span class="wpcf7-form-control-wrap other"><input type="text" name="other"
                                                value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"></span></td>
                                </tr>
                                <tr>
                                    <th>過去利用の他業者名<span class="required">必須</span></th>
                                    <td><span class="wpcf7-form-control-wrap after"><input type="text" name="after"
                                                value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false"></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                            <input type="hidden" value="" name="token" id="token">
                            <input class="submit" type="submit" name="submit" value="送信する">
                        </p>
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                </form>
            </div>
        </section>
        <section id="section__contact">
            <div class="container">
                <h2 class="about_title">アクセス</h2>
                <div class="ds_contact">
                    <input id="myInput" type="text" placeholder="Search in table..">
                    <br><br>
                    <table>
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@mail.com</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@greatstuff.com</td>
                            </tr>
                            <tr>
                                <td>Anja</td>
                                <td>Ravendale</td>
                                <td>a_r@test.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="section__googlemap">
            <div class="container">
                <h2 class="about_title">GOOGLE MAP</h2>
                <p class="p_text">
                    The human in-the-loop process is a way to generate features using domain experts. Using domain
                    experts to come up with features is not a novel concept. However, the specific interfaces and method
                    which helps the domain experts create the features are most likely novel.
                    In this case the features the experts create are equivalent to regular expressions. Removing
                    non-alphabetical characters and matching on "smokesppd" is equal to the regular expression
                    /smokes[^a-zA-Z]*ppd/. Using regular expressions as features for text classification is not novel.
                    Given these features the classifier is a manually set threshold by the authors, decided by the
                    performance on a set of documents. This is a classifier, it's just that the parameters of the
                    classifier, in this case a threshold, is set manually. Given the same features and documents almost
                    any machine learning algorithm should be able to find the same threshold or (more likely) a better
                    one.
                    The authors note that using support vector machines (SVM) and hundreds of documents give inferior
                    performance, but does not specify which features or documents the SVM was trained/tested on. A fair
                    comparison would use the same features and document sets as those used by the manual threshold
                    classifier.
                </p>
            </div>
        </section>
    </main>
    <p id="gototop">
        <a href="#" title="back to top" class="back2Top">back to top</a>
    </p>
    <?php
        // include ("./footer.php");
    ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/jquery/jquery.simplyscroll.js"></script>
    <link rel="stylesheet" href="assets/jquery/jquery.simplyscroll.css" media="all" type="text/css">
    <script src="./assets/js/header.js"></script>
    <script src="./assets/js/main.js"></script>
    <script type="text/javascript">
        (function($) {
            $(function() {
                $("#scroller").simplyScroll({
                    pauseOnTouch: true,
                    pauseOnHover: true
                });
            });
        })(jQuery);
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>