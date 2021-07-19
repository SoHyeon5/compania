
<script>
   function check_input()
   {
      if (!document.member_form.id.value) {
          alert("아이디를 입력하세요!");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value) {
          alert("비밀번호를 입력하세요!");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value) {
          alert("비밀번호확인을 입력하세요!");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value) {
          alert("이름을 입력하세요!");    
          document.member_form.name.focus();
          return;
      }

	  if (!document.member_form.tel1.value) {
          alert("전화번호를 입력하세요!");    
          document.member_form.tel1.focus();
          return;
      }

	  if (!document.member_form.tel2.value) {
          alert("전화번호를 입력하세요!");    
          document.member_form.tel2.focus();
          return;
      }

	  if (!document.member_form.tel3.value) {
          alert("전화번호를 입력하세요!");    
          document.member_form.tel3.focus();
          return;
      }

      if (!document.member_form.email1.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email1.focus();
          return;
      }

      if (!document.member_form.email2.value) {
          alert("이메일 주소를 입력하세요!");    
          document.member_form.email2.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value) {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form() {
      document.member_form.id.value = "";  
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
      document.member_form.id.focus();
      return;
   }

   function check_id() {
     window.open("member_check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
   }
</script>

<body> 
    <section id="section_join">
        <div id="join_back">
            <div id="join_form">
                <ul class="join_mn">
                    <li class="tx_join">회원가입</li>
                    
                    <li> <input type="text" name="id" placeholder="아이디"></li>
                    <p>(영문 소문자/숫자, 4~16자)</p>
                    <li><input type="password" name="pass" placeholder="비밀번호"></li>
                    <li class="pass_box"><input type="password" name="pass_confirm" placeholder="비밀번호 확인"></li>
                    <p>(영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 10자~16자)</p>
                    <li> 
                        <input type="text" name="name" placeholder="이름">
                        <a href="#" onclick="check_id()"><p>중복체크</p></a>
                    </li>  
                    <li>
                        <input type="text" name="tel1" placeholder="휴대전화 번호"> -
                        <input type="text" name="tel2" placeholder="휴대전화 번호"> -
                        <input type="text" name="tel3" placeholder="휴대전화 번호">
                    </li>
                    <li>
                        <input type="text" name="email1" placeholder="이메일">
                        <input type="text" name="email2" placeholder="이메일">
                    </li>
                </ul>
            </div>
            <div id="proallow_ALL">
                <ul class="proallow">
                    <li class="tx_join">이용약관 동의</li>
                    <hr>
                    <li class="check_all"><input type="checkbox" id="ckpro_all" name="ckall" value="checkbox">전체동의</li>
                        
                    <li class="proallow_ck"><input type="checkbox" class="ckproallow" name="ckproallow1" id="ckpro1" value="checkbox">이용약관
                        <span class="essential">(필수)</span>
                        <button class="btn_allowopen1">
                        <button class="btn_allowclose1"></button>
                    </li>  
                    <li>
                        <div class="box_allow1">
                            어쩌구저쩌구 개인정보~
                        </div>
                    </li>
                    <li class="proallow_ck"><input type="checkbox" class="ckproallow" name="ckproallow2" id="ckpro2" value="checkbox">개인정보 수집 및 이용
                        <span class="essential">(필수)</span>
                        <button class="btn_allowopen2">
                        <button class="btn_allowclose2"></button>
                    </li>  
                    <li>
                        <div class="box_allow2">
                            어쩌구저쩌구 개인정보~
                        </div>
                    </li>
                    <li class="proallow_ck"><input type="checkbox" class="ckproallow" name="ckproallow3" id="ckpro3" value="checkbox">개인정보 제3자 제공
                        <span class="essential">(필수)</span>
                        <button class="btn_allowopen3">
                        <button class="btn_allowclose3"></button>
                    </li>  
                    <li>
                        <div class="box_allow3">
                            어쩌구저쩌구 개인정보~
                        </div>
                    </li>

                    <li class="proallow_ck"><input type="checkbox" class="ckproallow" name="ckproallow3" id="ckpro4" value="checkbox">맞춤 서비스, 할인정보 등 정보 수신<span class="choice">(선택)</span></label>
                        <ul >
                            <li><input type="checkbox" class="check_choice" name="SMS" vlaue="checkbox">SMS</li>
                            <li><input type="checkbox" class="check_choice" name="email" vlaue="checkbox">이메일</li>
                            <li><span class="txgray">SMS, 이메일 수신 동의 시,<br> 회원님들만을 위해 준비된 이벤트를 받으실 수 있습니다.</span></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="join_plus">
                    <li class="tx_join">추가 입력 사항</li>
                    
                    <li>1. 우리 아이의 이름은 무엇인가요?</li>
                    <input type="text" name="plus_name">
                    <li>2. 우리 아이는 누구인가요?</li>
                    <li>
                    <ul class="plus_who">
                        <li><input type="checkbox" class="ck_plus" name="plus_who" value="dog">강아지</li>
                        <li><input type="checkbox" class="ck_plus" name="plus_who" value="cat">고양이</li>
                        <li><input type="checkbox" class="ck_plus" name="plus_who" value="bird">조류</li>
                        <li><input type="checkbox" class="ck_plus" name="plus_who" value="ham">설치류</li>
                        <li><input type="checkbox" class="ck_plus" name="plus_who" value="camel">파충류</li>
                        </ul> 
                    </li>
                </ul>
                <div class="join-img">
                    <a href="joinend_index.hp"><button onclick="check_input()" class="joinend">회원가입</button></a>
                </div>
            </div>
        </div>
    </section>
			       	<div class="buttons">
	                	<img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">&nbsp;
                  		<img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif"
                  			onclick="reset_form()">
	           		</div>
           	</form>
        	</div> <!-- join_box -->
        </div> <!-- main_content -->
	</section> 
</body>


