								<hr>

								<!-- Gitalk 评论框 start -->
								<div id="gitalk-container"></div>
								<!-- Gitalk 评论框 end -->

								</div>
							</div>
						</div>
					</section>
				</div>
			</div>

			
			<hr>
			<center>[CC协议 BY-NC-SA] 署名 - 非商业性使用 - 相同方式共享  @ UOJ部署指北 2018</center>

		</div>


	</main>
	
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<a class="fbtn fbtn-lg fbtn-brand-accent waves-attach waves-circle waves-light" data-toggle="dropdown">
				<span class="fbtn-text fbtn-text-left">Home</span>
				<span class="fbtn-ori icon">apps</span>
				<span class="fbtn-sub icon">close</span>
			</a>
			<div class="fbtn-dropup">
				<a class="fbtn waves-attach waves-circle" href="https://github.com/UniversalOJ/UniversalOJ.github.io/issues" target="_blank">
					<span class="fbtn-text fbtn-text-left">反馈</span><span class="icon">feedback</span>
				</a>
				<a class="fbtn fbtn-green waves-attach waves-circle" href="/" target="_self">
					<span class="fbtn-text fbtn-text-left">返回主页</span><span class="icon">home</span>
				</a>
			</div>
		</div>
	</div>

	

	<!-- js -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/base.min.js"></script>
    
    <!-- Gitalk JS 代码 start -->
    <script src="/js/gitalk.min.js"></script>
    <script>
    const gitalk = new Gitalk({
      clientID: '0dc093a9aefa1d501df2',
      clientSecret: '3639aabd1bc6b0d9b543be1f13b6bcb2bf7364af',
      repo: 'UniversalOJ.github.io',
	  id: location.pathname,
      owner: 'UniversalOJ',
      admin: ['cebarobot', 'MascoSkray', 'Ruanxingzhi', 'billchenchina'],
      labels: [],
    })
    
    gitalk.render('gitalk-container')
    </script>
    <!-- Gitalk JS 代码 end -->
    
</body>
</html>
