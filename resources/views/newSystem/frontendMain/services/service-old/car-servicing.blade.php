@extends("newSystem/frontendMain/layouts/template/template")
<title>บริการดูแลรถยนต์</title>
@section("content")
<div class="container bootstrap snippet">
    <hr>
	<div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        <div class="well blog">
	            <div class="row">
	                <div class="col-xs-12 col-sm-5 col-md-12 col-lg-5">
	                    <div class="image">
	                    	<picture>
                                <source type="image/webp" srcset="{{ asset('/images/service/car-servicing.webp')}}" class="img-responsive">
                                <source type="image/jpeg" srcset="{{ asset('/images/service/car-servicing.jpg')}}" class="img-responsive">
                                <img src="{{ asset('/images/service/car-servicing.jpg')}}" class="img-responsive">
                            </picture>
	                    </div>
	                </div>
	                <div class="col-xs-12 col-sm-7 col-md-12 col-lg-7" style="margin-top: 10px;">
	                    <div class="blog-details">
	                        <h2>บริการดูแลรถยนต์</h2>
	                        <p>
	                            การบำรุงรักษา และดูแลรักษารถยนต์อย่างสม่ำเสมอเป็นสิ่งสำคัญที่คนใช้รถยนต์หลายคนอาจมองข้ามไป ไม่ว่าจะเป็น การเช็คสภาพรถยนต์ การเปลี่ยนถ่ายน้ํามันเครื่องรถยนต์ การเปลี่ยนน้ำมันเกียร์ น้ำยาหม้อน้ำ ฯลฯ การเปลี่ยนถ่ายของเหลว รถของคุณต้องการการบำรุงรักษษ และต้องได้รับการเปลี่ยนถ่ายของเหลวเป็นประจำอย่างสม่ำเสมอ เพื่อให้รถของคุณมีสภาพพร้อมใช้งาน
	                        </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        <div class="well blog">
	            <div class="row">
	                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                	<div class="blog-details">
	                        <p>โดยพฤติกรรมการใช้รถยนต์จะใช้งานกันยาว ๆ อย่างน้อยก็ 5 ปีขึ้น หรือไม่ก็ไปซื้อรถยนต์มือ 2 มาใช้งานกัน แน่นอน .. รถยนต์จะประกอบด้วยชิ้นส่วนที่หลากหลาย บางชิ้นส่วนที่มีการเสียดสีก็ต้องมีน้ำมันหล่อลื่นช่วย และน้ำมันหล่อลื่น และของเหลวในรถยนต์นี่แหละไม่ว่าจะเป็น น้ำมันเครื่อง น้ำมันเกียร์ น้ำมันเบรก น้ำยาในหม้อน้ำ เป็นต้น มันจะมีระยะเวลาในการเปลี่ยนของมัน แล้วเราจะรู้ได้อย่างไรว่า น้ำมันหล่อลื่น หรือของเหลวพวกนี้จะต้องเปลี่ยนกันตอนไหนบ้าง เอกการยางสามารถช่วยคุณได้ <br><br>
	                        รู้ก่อนพัง !! 5 ของเหลวในรถยนต์ ควรเปลี่ยนตอนไหน<br><br>
	                        <strong>น้ำมันเครื่อง</strong><br>
	                        การเปลี่ยนถ่ายน้ำมันเป็นสิ่งที่สำคัญมากเพราะว่าเปรียบเสมือนเป็นเส้นเลือดที่หล่อเลี้ยงเครื่องยนต์ให้ทำงานได้ดี เราจึงควรใส่ใจกับการเปลี่ยนน้ำมันเครื่อง การเปลี่ยนน้ำมันเครื่องเพื่อให้ช่วยยืดอายุการใช้งานของรถ ปกตินิยมเปลี่ยนน้ำมันเครื่องเมื่อรถวิ่งถึงระยะ 8,000 – 10,000 ก.ม. หรือทุก ๆ 6 เดือน<br><br>
	                        <strong>น้ำมันเกียร์</strong><br>
	                        เกียร์ คือชิ้นส่วนรถยนต์ที่สำคัญมาก ควรบำรุงรักษาให้ดี  การเปลี่ยนน้ำมันเกียร์ตามระยะกำหนดทำให้เกียร์ของรถยนต์มีอายุยืนยาวขึ้น เพราะ น้ำมันกียร์มีหน้าที่ ช่วยลดแรงเสียดทาน ลดการสึกหรอของเกียร์ ช่วยลดเสียงดัง และการสั่นสะเทือนในเรือนเกียร์ ช่วยป้องกันสนิมการกัดกร่อนจากชิ้นส่วนภายในเกียร์
	                        <br><br><strong>น้ำยาหล่อเย็น</strong><br>
	                        น้ำยาหล่อเย็น ส่วนประกอบหลักจะมี น้ำ, สารหล่อเย็น , หัวเชื้อป้องกันสนิม และสีต่าง ๆ ฯลฯ น้ำยาหล่อเย็น ไม่ได้มีหน้าที่ระบายความร้อน แต่จะช่วยทำให้จุดเดือดของน้ำที่ผสมน้ำยาหล่อเย็นสูงขึ้น ทำให้น้ำที่อยู่ในหม้อน้ำเดือดช้าลง แถมยังป้องกันการเกิดสนิม ตะกรัน ตะกอน เพราะเมื่อมีสนิมมันก็จะผุ กร่อน มีตะกอน<br><br>
	                        <strong>น้ำมันเบรก</strong><br>
	                        น้ำมันเบรกมีหน้าที่ในการเป็นตัวกลางส่งแรงดันจากแม่ปั๊มเบรกตัวบนไปยังลูกสูบเบรก น้ำมันเบรกที่ดีจะต้องมีจุดเดือดสูง เพื่อไม่ให้น้ำมันเบรกร้อนเร็วเกินไปจนกลายเป็นไอไม่สามารถถ่ายเทแรงดันได้ตามปกติ  ถ้าไม่มีน้ำมันเบรกหล่อลื่นก็จะทำให้เกิดการสึกหรอและทำให้เบรกแตกได้<br><br>
	                        <strong>น้ำมันพาวเวอร์</strong><br>
	                        ควรเปลี่ยนถ่ายน้ำมันพวงมาลัยเพาเวอร์ทุก 80,000 กิโลเมตร หรือตามระยะที่กำหนดในคู่มือเจ้าของรถ เพราะเมื่อเวลาผ่านไป ความร้อนจากเครื่องยนต์ และสภาพโดยรอบจะทำให้ความสามารถในการทำงานของน้ำมันลดลง และทำให้ชิ้นส่วนภายในระบบพวงมาลัยเพาเวอร์สึกหรอ และสึกกร่อน ที่สำคัญ การเปลี่ยนถ่ายน้ำมันมีค่าใช้จ่ายต่ำกว่าการเปลี่ยนปั๊มพวงมาลัยเพาเวอร์หรือชุดเฟืองขับ และเฟืองสะพาน<br><br>เอกการยาง ใส่ใจกว่าที่เห็น เพราะรถทุกคันสำคัญสำหรับเรา
							&nbsp&nbsp** สอบถามข้อมูลเพิ่มเติมหรือแวะไปได้ที่เอกการยางทุกสาขา
	                        </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>                    
@endsection