var pubStaticPath = (typeof staticPath != "undefined" && staticPath != "") ? staticPath : "/static/";
var pubModelType = (typeof modelType != "undefined") ? modelType : "siteConfig";

document.write('<script type="text/javascript" src="'+pubStaticPath+'js/webuploader/webuploader.js?t='+~(-new Date())+'"></script>');

var uploadCustom = {
	//旋转图集文件
	rotateAtlasPic: function(mod, direction, img, c) {
		var g = {
			mod: mod,
			type: "rotateAtlas",
			direction: direction,
			picpath: img,
			randoms: Math.random()
		};
		$.ajax({
			type: "POST",
			cache: false,
			async: false,
			url: "/include/upload.inc.php",
			dataType: "json",
			data: $.param(g),
			success: function(a) {
				try {
					c(a)
				} catch(b) {}
			}
		});
	}
}

$(function(){


	$("head").append('<link rel="stylesheet" type="text/css" href="'+pubStaticPath+'css/publicUpload.css?t='+~(-new Date())+'">');
	$('.listImgBox').show();

	$('.filePicker').each(function() {

	  var picker = $(this), type = picker.data('type'), type_real = picker.data('type-real'), atlasMax = count = picker.data('count'), size = picker.data('size') * 1024, upType1, accept_title, accept_extensions = picker.data('extensions'), accept_mimeTypes = picker.data('mime');

		if (type == "thumb") {
			serverUrl = '/include/upload.inc.php?mod='+pubModelType+'&filetype=image&type=thumb';
		}else if (type == "desc" || type == "adv" || type == "name" || type == "album" || type == "certs" || type == "pics") {
			serverUrl = '/include/upload.inc.php?mod='+pubModelType+'&filetype=image&type=atlas&utype='+type;
		}else if (type == "filenail") {
			if(type_real){
				serverUrl = '/include/upload.inc.php?mod='+pubModelType+'&type='+type_real+'&filetype='+type_real;
			}else{
				serverUrl = '/include/upload.inc.php?mod='+pubModelType+'&type=file';
			}
		}else{
			serverUrl = '/include/upload.inc.php?mod='+pubModelType+'&filetype='+type+'&type='+type;
		}

		if (type == "filenail") {
			accept_title = 'file';
			accept_extensions = accept_extensions ? accept_extensions : '';
			accept_mimeTypes = accept_mimeTypes ? accept_mimeTypes : '';
		}else {
			accept_title = 'Images';
			accept_extensions = 'jpg,jpeg,gif,png';
			accept_mimeTypes = 'image/jpg,image/jpeg,image/png,image/gif';
		}
	  console.log(accept_extensions + '-- ' + accept_mimeTypes);

		//上传凭证
	  var i = $(this).attr('id').substr(10);
		var $list = $('#listSection' + i),
			uploadbtn = $('.uploadinp'),
				ratio = window.devicePixelRatio || 1,
				fileCount = 0,
				thumbnailWidth = 100 * ratio,   // 缩略图大小
				thumbnailHeight = 100 * ratio,  // 缩略图大小
				uploader;

		fileCount = $list.find('li').length;

	  if (type == "adv") {
	    var adBody = [];
	        adBody = $('#adBody').html().split(",");
	    if (adBody != "") {
	      fileCount = adBody.length;
	    }
	  }
		if (type == "quanj" && $("input[name='typeidArr']:checked").val() == 0) {
			var litpicArr = $("#litpic").val();
			if (litpicArr != "") {
				fileCount = litpicArr.split(",").length;
			}else {
				fileCount = 0;
			}
	  }

	  // 后加载进来的数据
		var	img = picker.data('imglist');
		if (img != "") {
	    if (type == "certs") {
	      var list = certs.split("||");
	    }else if (type == "pics") {
				var list = pics;
	    }else {
	      var list = imglist[img];
	    }
			var picList = [], fileCount = list_length = list.length, count = count - list_length;
		}



		// 初始化Web Uploader
		uploader = WebUploader.create({
			auto: true,
			swf: pubStaticPath + 'js/webuploader/Uploader.swf',
			server: serverUrl,
			pick: '#filePicker' + i,
			fileVal: 'Filedata',
			accept: {
				title: accept_title,
				extensions: accept_extensions,
				mimeTypes: accept_mimeTypes
			},
            chunked: true,//开启分片上传
            // threads: 1,//上传并发数
			fileNumLimit: count,
			fileSingleSizeLimit: size
		});

		//删除已上传图片
		var delAtlasPic = function(b){
			var delbox = b.closest('.listImgBox'), delType = delbox.find('.filePicker').attr('data-type'), real_type = delbox.find('.filePicker').attr('data-type-real'), picpath = b.find("img").attr("data-val");
			if (delType == "thumb") {
				delType1 = "thumb";
			}else if (delType == "desc" || delType == "adv" || delType == "name" || delType == "album" || delType == "certs" || delType == "pics") {
		    delType1 = "atlas";
			}else {
		    // delType1 = real_type ? real_type : delType;
	      if(real_type){
	        delType1 = real_type;
	        picpath = picpath ? picpath : b.children().attr("data-val");
	      }else{
	        delType1 = delType;
	      }
			}

            picpath = picpath ? picpath : b.closest('.listSection').next("input").val();
			var g = {
				mod: pubModelType,
				type: "del"+delType1,
				picpath: picpath,
				randoms: Math.random()
			};
			$.ajax({
				type: "POST",
				url: "/include/upload.inc.php",
				data: $.param(g)
			})
		};

		//更新上传状态
		function updateStatus(obj){
	    var listImgBox = obj.closest('.listImgBox'), listSection = listImgBox.find(".listSection"),
	        li = listSection.find('li'), filePicker = listImgBox.find('.filePicker'), count = filePicker.attr('data-count');
			if(li.length == 0){
				$('.imgtip').show();
	      obj.closest('.listImgBox').find('.filePicker').show();
				obj.closest('.listImgBox').find('.listSection').hide();
				obj.closest('.listImgBox').find('.deleteAllAtlas').hide();
			}else{
				$('.imgtip').hide();
				if(count == 1){
					obj.closest('.listImgBox').find('.uploadinp').hide();
				}
			}
			if (atlasMax == fileCount) {
				$('#previewQj').show();
			}else {
				$('#previewQj').hide();
			}
			$(".uploader-btn .utip").html('还能上传'+(atlasMax-fileCount)+'张图片');
		}

		// 负责view的销毁
		var removeFile = function(file) {
			var $li = $('#'+file.id);
			fileCount--;
			delAtlasPic($li);
			$li.remove();
			updateStatus($li);
		}

		//从队列删除
		$list.delegate(".li-rm", "click", function(){
			var t = $(this), li = t.closest("li"), ul = li.closest('ul'), dd = t.closest('.listImgBox'), uploadinp = dd.find('.uploadinp'),
	        dataCount = uploadinp.attr("data-count");
			var file = [];
			file['id'] = li.attr("id");
			removeFile(file);
			updateStatus(ul);
			imgListVal(ul);
	    uploadinp.show();

		});

		//播放、暂停视频
		$list.delegate(".player", "click", function(){
			var t = $(this), video_ = t.siblings("video")[0];
	    if(t.hasClass("ing")){
				video_.pause();
				t.removeClass("ing");
				t.next(".info").show();
			}else{
				video_.play();
				t.addClass("ing");
				t.next(".info").hide();
	      // 播放结束
	      video_.addEventListener("ended", function(){
	        t.removeClass("ing");
	        t.next(".info").show();
	      })
	    }

		});


		//删除所有图集
		$(".deleteAllAtlas").bind("click", function(){
			var t = $(this), dd = t.closest('.listImgBox'), listSection = dd.find('.listSection'),
					li = listSection.find("li"), file = [];

				for (var m = 0; m < li.length; m++) {
					file['id'] = li.eq(m).attr("id");
					removeFile(file);
				}

			fileCount = 0;
			updateStatus(t);
			listSection.hide();
			t.hide();
			imgListVal(listSection);

		});


		// 切换litpic
		if(atlasMax > 1){
			$list.delegate(".pubitem img", "click", function(){
				var t = $(this).parent('.pubitem');
				if(atlasMax > 1 && !t.hasClass('litpic')){
				console.log('eee')
					t.addClass('litpic').siblings('.pubitem').removeClass('litpic');
				}
			});
		}

		// 当有文件添加进来时执行，负责view的创建
		function addFile(file) {

	    if (type == "thumb") {
	      var $li = $('<li id="' + file.id + '" class="pubitem"><a href="" target="_blank" title="" class="enlarge"><img></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li>');
	    }
			else if (type == "advthumb") {
	      var $li = $('<li id="' + file.id + '" class="pubitem"><a href="" target="_blank" title="" class="enlarge"><img></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li>');
	    }
			else if (type == "desc"){
	      var $li   = $('<li class="pubitem fn-clear" id="' + file.id + '"><span class="li-move" title="拖动调整图片顺序">↕</span><a class="li-rm" href="javascript:;">×</a><div class="li-thumb" style="display: block;"><div class="r-progress"><s></s></div><span class="ibtn"><a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a><a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a><a href="" target="_blank" class="enlarge" title="放大"></a></span><span class="ibg"></span><img></div><textarea class="li-desc inputVal" placeholder="请输入图片描述" style="display: inline-block;"></textarea></li>');
	    }else if (type == "adv"){
	      var $li   = $('<li class="pubitem fn-clear" id="' + file.id + '"><a class="li-move" href="javascript:;" title="拖动调整图片顺序">移动</a><a class="li-rm" href="javascript:;">×</a><div class="li-thumb" style="display: block;"><div class="r-progress"><s></s></div><span class="ibtn"><a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a><a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a><a href="" target="_blank" class="enlarge" title="放大"></a></span><span class="ibg"></span><img data-val="" src=""></div><div class="li-input" style="display: block;"><input type="text" style="margin:0 10px 10px 0; width:47%; float:left;" class="i-name inputVal" placeholder="请输入图片名称" value=""><input type="text" style="margin:0 0 10px 0; width:46%; float:left;" class="i-link inputVal" placeholder="请输入图片链接" value=""><input type="text" style="margin:0 10px 10px 0; width:47%; float:left;" class="i-desc" placeholder="请输入图片介绍" value="" /><div class="help-inline" style="padding-left: 0; line-height: 35px;">广告标识：<label><input type="radio" class="mark" name="mark_'+file.id+'" value="1">隐藏</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" class="mark" value="0" checked="checked" name="mark_'+file.id+'">显示</label></div></div></li>');
	    }else if (type == "name" || type == "pics"){
	      var $li   = $('<li class="pubitem fn-clear" id="' + file.id + '"><a class="li-move" href="javascript:;" title="拖动调整图片顺序">移动</a><a class="li-rm" href="javascript:;">×</a><div class="li-thumb" style="display: block;"><div class="r-progress"><s></s></div><span class="ibtn"><a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a><a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a><a href="" target="_blank" class="enlarge" title="放大"></a></span><span class="ibg"></span><img data-val="" src=""></div><div class="li-info" style="display:block;"><input class="li-title inputVal" placeholder="请输入图片名称" style="width:225px; display:inline-block;" value=""></div></li>');
	    }else if (type == "album" || type == "single"){
	      var $li   = $('<li class="pubitem fn-clear" id="' + file.id + '"><a class="li-rm" href="javascript:;">×</a><div class="li-thumb" style="display: block;"><div class="r-progress"><s></s></div><span class="ibtn"><a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a><a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a><a href="" target="_blank" class="enlarge" title="放大"></a></span><span class="ibg"></span><img data-val="" src=""></div></li>');
	    }else if (type == "quanj"){
	      var $li   = $('<li class="pubitem fn-clear" id="' + file.id + '"><a class="li-rm" href="javascript:;">×</a><div class="li-thumb" style="display: block;"><div class="r-progress"><s></s></div><img data-val="" src=""></div></li>');
	    }else if (type == "certs"){
	      var $li   = $('<li class="pubitem fn-clear" id="' + file.id + '"><a class="li-move" href="javascript:;" title="拖动调整图片顺序">移动</a><a class="li-rm" href="javascript:;">×</a><div class="li-thumb" style="display:block;"><span class="ibtn"><a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a><a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a><a href="" target="_blank" class="enlarge" title="放大"></a></span><span class="ibg"></span><img data-val="" src=""></div><div class="li-input" style="display: block;"><input class="i-name" placeholder="请输入图片名称" value="" /><input class="i-note" placeholder="请输入图片简介" value="" /></div></li>');
	    }else if (type == "filenail") {
	    	if(type_real == "video"){
	    			var $li = $('<li id="' + file.id + '" class="pubitem"> <video class="video-js enlarge" id="video_' + file.id + '" src="/include/attachment.php?f=" data-val="" poster="' + file.poster + '"><source class="enlarge" src="/include/attachment.php?f=" type="video/mp4"></video> <div class="file-panel li-rm"><span class="cancel">取消</span></div> <span class="player"></span></li>');
	    	}else{
					var $li = $('<li id="' + file.id + '" class="pubitem"><a href="" target="_blank" title="" class="enlarge"><img></a><a class="li-rm" href="javascript:;">×</a></li>');
				}
	    }
			else {
	      var $li = $('<li id="' + file.id + '" class="pubitem"><a href="" target="_blank" title="" class="enlarge"><img></a><a class="reupload li-rm" href="javascript:;">删除图片</a></li>');
	    }

			var $btns = $li.find('.li-rm'),
			    $img = $li.find('img');

			// 创建缩略图
			uploader.makeThumb(file, function(error, src) {
					$img.closest('.listSection').show();
					if(error){
						$list.show();
						$img.replaceWith('<span class="thumb-error">上传中...</span>');
						return;
					}
					$img.attr('src', src);
				}, thumbnailWidth, thumbnailHeight);

				$btns.on('click', function(){
					uploader.cancelFile( file );
					uploader.removeFile(file, true);
				});

				$('.deleteAllAtlas').on('click', function(){
					uploader.removeFile(file, true);
				});

				$list.append($li);
		}

		// 当有文件添加进来的时候
		uploader.on('fileQueued', function(file) {

	    var pick = $(this.options.pick);
			//先判断是否超出限制
			if(fileCount == atlasMax){
		    alert("文件数量已达上限");
				uploader.cancelFile( file );
				return false;
			}

			fileCount++;
			addFile(file);
			updateStatus(pick);
		});

		// 文件上传过程中创建进度条实时显示。
		uploader.on('uploadProgress', function(file, percentage){
			var $li = $('#'+file.id),
			$percent = $li.find('.progress span');

			// 避免重复创建
			if (!$percent.length) {
				$percent = $('<p class="progress"><span></span></p>')
					.appendTo($li)
					.find('span');
			}
			$percent.css('width', percentage * 100 + '%');

			//音频文件浏览器右下角增加上传进度
			if(file.ext == 'mp3'){
				var progressFixed = $('#progressFixed_' + file.id);
				if(!progressFixed.length){
					var $i = $("<b id='progressFixed_"+file.id+"'>");
			        $i.css({bottom: 0, left: 0, position: "fixed", "z-index": "10000", background: "#a5a5a5", padding: "0 5px", color: "#fff", "font-weight": "500", "font-size": "12px"});
					$("body").append($i);
					progressFixed = $('#progressFixed_' + file.id);
				}
				progressFixed.text("上传进度："+parseInt(percentage * 100) + '%');
				if(percentage == 1){
					progressFixed.remove();
				}
			}

		});

		// 文件上传成功，给pubitem添加成功class, 用样式标记上传成功。
		uploader.on('uploadSuccess', function(file, response){
			window.webUploadSuccess && window.webUploadSuccess(file, response, picker);
			var $li = $('#'+file.id), listSection = $li.closest('.listSection');
			listSection.show();
			if(response.state == "SUCCESS"){
				var img = $li.find("img");
				if (img.length > 0) {
					img.attr("data-val", response.url).attr("data-url", response.turl).attr("src", response.turl);
					$li.find(".enlarge").attr("href", response.turl);
					$li.closest('.listImgBox').find('.deleteAllAtlas').show();
					imgListVal(img);
		      if(fileCount == atlasMax && atlasMax == 1){
		        $(this.options.pick).closest('.uploadinp').hide();
		  			return false;
		  		}
				}else {
					$li.addClass("complete");
					fileObj = $li.find('.enlarge');
					var src = fileObj.attr("src");
					if(src !== undefined){
						fileObj.attr("src", response.turl);
					}
					fileObj.attr("href", response.turl).attr("data-val", response.url);
					fileObj.find('.thumb-error').text('点击下载');
					imgListVal(fileObj);

					if(type_real == "video"){
						$li.find(".cancel").text("删除");
						$li.append('<p class="info">上传成功<span class="time">00:00</span></p> ');
						if(response.poster){
							fileObj.attr("poster", response.poster);
						}
						var video_ = document.getElementById('video_'+file.id);
	          video_.addEventListener("loadedmetadata", function(){
	           	var seconde = parseInt(video_.duration);
	           	var time = "";
	           	if(seconde > 3600){
	           		var h = seconde % 3600,
	           				m = ( seconde - h * 3600 ) % 60,
	           				s = seconde - h * 3600 - m * 60;
	           		h = h < 10 ? '0' + h : h;
	           		m = m < 10 ? '0' + m : m;
	           		s = s < 10 ? '0' + s : s;
	           		time = h + ':' + m + ':' + s;
	           	}else if(seconde > 60){
	           		var m = seconde % 60,
	           				s = seconde - m * 60;
	       				m = m < 10 ? '0' + m : m;
	           		s = s < 10 ? '0' + s : s;
	           		time = m + ':' + s;
	           	}else{
	           		var s = seconde < 10 ? '0' + seconde : seconde;
	           		time = '00:' + s;
	           	}
	           	$li.find(".info span").text(time);
	          })
					}
				}
			}else{
	      $li.closest('.listImgBox').find('.filePicker').show();
				removeFile(file, true);
				var length = listSection.find('li').length;
				if (length == 0) {
					listSection.siblings('.filePicker').show();
					alert(response.state);
				}
		    // showErr($(this.options.pick), "上传失败");
			}
		});

		// 文件上传失败，现实上传出错。
		uploader.on('uploadError', function(file){
			removeFile(file);
	    alert("上传失败");
		});

		// 完成上传完了，成功或者失败，先删除进度条。
		uploader.on('uploadComplete', function(file){
			$('#'+file.id).find('.progress').remove();
			//清空队列
	    //  uploader.reset();
		});

		// 所有文件上传成功后调用
		uploader.on('uploadFinished', function () {
		    //清空队列
		     uploader.reset();
		});

		//上传失败
		uploader.on('error', function(code){
			var txt = "上传失败！", size = this.options.fileSingleSizeLimit;
			switch(code){
				case "Q_EXCEED_NUM_LIMIT":
					txt = "图片数量已达上限";
					break;
				case "F_EXCEED_SIZE":
					txt = "图片大小超出限制，单张图片最大不得超过"+size/1024/1024+"MB";
					break;
				case "F_DUPLICATE":
					txt = "此图片已上传过";
					break;
			}
	    alert(txt);
		});


		// 后台上传图集
		if (img != "") {
	    if (img == "certs") {
				if (certs != "") {
	    		for(var j = 0; j < list.length; j++){
	    			var imgItem = list[j].split("##");
	    			picList.push('<li class="clearfix" id="SWFUpload_1_0'+j+'">');
	    			picList.push('  <a class="li-move" href="javascript:;" title="拖动调整图片顺序">移动</a>');
	    			picList.push('  <a class="li-rm" href="javascript:;">×</a>');
	    			picList.push('  <div class="li-thumb" style="display:block;">');
	    			picList.push('    <div class="r-progress"><s></s></div>');
	    			picList.push('    <span class="ibtn">');
	    			picList.push('      <a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a>');
	    			picList.push('      <a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a>');
	    			picList.push('      <a href="'+cfg_attachment+imgItem[0]+'&type=large" target="_blank" class="enlarge" title="放大"></a>');
	    			picList.push('    </span>');
	    			picList.push('    <span class="ibg"></span>');
	    			picList.push('    <img data-val="'+imgItem[0]+'" src="'+cfg_attachment+imgItem[0]+'" data-val="'+cfg_attachment+imgItem[0]+'" />');
	    			picList.push('  </div>');
	    			picList.push('  <div class="li-input" style="display:block;"><input class="i-name" placeholder="请输入资质名称" value="'+imgItem[1]+'" /><input class="i-note" placeholder="请输入资质简介" value="'+imgItem[2]+'" /></div>');
	    			picList.push('</li>');
	    		}
	      }
	    }else if (img == "pics") {
				if (pics != "") {
					for(var j = 0; j < pics.length; j++){
						picList.push('<li class="clearfix" id="SWFUpload_1_0'+j+'">');
						picList.push('  <i class="li-move" href="javascript:;" title="拖动调整图片顺序">移动</i>');
						picList.push('  <a class="li-rm" href="javascript:;">×</a>');
						picList.push('  <div class="li-thumb" style="display:block;">');
						picList.push('    <div class="r-progress"><s></s></div>');
						picList.push('    <span class="ibtn">');
						picList.push('      <a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a>');
						picList.push('      <a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a>');
						picList.push('      <a href="'+cfg_attachment+pics[j][0]+'&type=large" target="_blank" class="enlarge" title="放大"></a>');
						picList.push('    </span>');
						picList.push('    <span class="ibg"></span>');
						picList.push('    <img data-val="'+pics[j][0]+'" src="'+cfg_attachment+pics[j][0]+'&type=small" data-url="'+cfg_attachment+pics[j][0]+'&type=small" />');
						picList.push('  </div>');
						picList.push('  <div class="li-info" style="display:block;"><input class="li-title" placeholder="请输入图片名称" style="width:225px; display:inline-block;" value="'+pics[j][1]+'"></div>');
						picList.push('</li>');
					}
				}
	    }else {
				for(var j = 0; j < list_length; j++){
					var listJ = list[j], path = listJ.path;
					if (listJ != undefined && listJ != '') {
						picList.push('<li class="clearfix" id="WU_FILE_'+i+'_'+j+'">');
						picList.push('  <a class="li-move" href="javascript:;" title="拖动调整图片顺序">移动</a>');
						picList.push('  <a class="li-rm" href="javascript:;">×</a>');
						picList.push('  <div class="li-thumb" style="display:block;">');
						picList.push('    <div class="r-progress"><s></s></div>');
						picList.push('    <span class="ibtn">');
						picList.push('      <a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a>');
						picList.push('      <a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a>');

						if (type == "desc") {
							if (path == undefined) {
								var imgItem = list[j].split("##");
								picList.push('      <a href="'+cfg_attachment+imgItem[0]+'&type=large" target="_blank" class="enlarge" title="放大"></a>');
							}else {
								picList.push('      <a href="'+cfg_attachment+path+'&type=large" target="_blank" class="enlarge" title="放大"></a>');
							}
						}else {
							picList.push('      <a href="'+cfg_attachment+list[j]+'" target="_blank" class="enlarge" title="放大"></a>');
						}


						picList.push('    </span>');
						picList.push('    <span class="ibg"></span>');

						if (type == "desc") {
							if (path == undefined) {
								picList.push('    <img data-val="'+imgItem[0]+'" src="'+cfg_attachment+imgItem[0]+'" data-url="'+cfg_attachment+imgItem[0]+'" />');
								picList.push('  </div>');
								picList.push('  <textarea class="li-desc inputVal" placeholder="请输入图片描述" style="display:inline-block;">'+imgItem[1]+'</textarea>');
							}else {
								picList.push('    <img data-val="'+path+'" src="'+cfg_attachment+path+'" data-url="'+cfg_attachment+path+'" />');
								picList.push('  </div>');
								picList.push('  <textarea class="li-desc inputVal" placeholder="请输入图片描述" style="display:inline-block;">'+list[j].info+'</textarea>');
							}
						}else {
							picList.push('    <img data-val="'+list[j]+'" src="'+cfg_attachment+list[j]+'" data-url="'+cfg_attachment+list[j]+'" />');
							picList.push('  </div>');
						}
						picList.push('</li>');
					}
				}
	    }

			$("#listSection"+i).html(picList.join("")).show();
	    if (list_length > 0 && list[0] != '') {
	      $("#listSection"+i).closest('.listImgBox').find(".deleteAllAtlas").show();
	    }
		}

		if (type == "quanj") {
			//填充图片
			if($("input[name='typeidArr']:checked").val() == 0 && $("#litpic").val() != ""){
				var picList = [], imglistarr = $("#litpic").val().split(",");
				for(var i = 0; i < imglistarr.length; i++){
					picList.push('<li class="clearfix" id="SWFUpload_1_0'+i+'">');
					picList.push('  <a class="li-rm" href="javascript:;">×</a>');
					picList.push('  <div class="li-thumb" style="display:block;">');
					picList.push('    <div class="r-progress"><s></s></div>');
					picList.push('    <img data-val="'+imglistarr[i]+'" src="'+cfg_attachment+imglistarr[i]+'" />');
					picList.push('  </div>');
					picList.push('</li>');
				}
				$("#listSection2").html(picList.join(""));
			}
		}

		imgListVal(picker);

	})


	$('.listSection').on('input propertychange', function(){
		var t = $(this);
		imgListVal(t);
	})



	function imgListVal(obj){
		var dd = obj.closest('.listImgBox'), btn = dd.find('.filePicker'), type = btn.data("type"),
				listLi = dd.find('.listSection li'), $li_list = [];

		if (listLi.length != 0) {
			for (var k = 0; k < listLi.length; k++) {
				if (type == "thumb") {
					var imgsrc = listLi.find('img').attr('data-val');
					dd.find('.imglist-hidden').val(imgsrc);
				}else if (type == "desc"){
					var imgsrc = listLi.eq(k).find('img').attr("data-val"), imgdes = listLi.eq(k).find('.li-desc').val();
					$li_list.push(imgsrc+"|"+imgdes);
					dd.find('.imglist-hidden').val($li_list);
				}else if (type == "adv") {
					var imgsrc = listLi.eq(k).find('img').attr("data-val"), name = listLi.eq(k).find('.i-name').val(), href = listLi.eq(k).find('.i-link').val(), desc = listLi.eq(k).find('.i-desc').val(), mark = listLi.eq(k).find('.mark:checked').val();
					$li_list.push(imgsrc+"##"+name+"##"+href+"##"+desc+"##"+mark);
					dd.find('.imglist-hidden').val($li_list);
				}else if (type == "name") {
					var imgsrc = listLi.eq(k).find('img').attr("data-val"), title = listLi.eq(k).find('.li-title').val();
					$li_list.push(imgsrc+"||"+title);
					dd.find('.imglist-hidden').val($li_list);
				}else if (type == "pics") {
					var imgsrc = listLi.eq(k).find('img').attr("data-val"), title = listLi.eq(k).find('.li-title').val();
					$li_list.push(imgsrc+"||"+(title != undefined ? title : ''));
					dd.find('.imglist-hidden').val($li_list.join("###"));
				}else if (type == "album" || type == "single") {
					var imgsrc = listLi.eq(k).find('img').attr("data-val");
					$li_list.push(imgsrc);
					dd.find('.imglist-hidden').val($li_list);
				}else if (type == "certs") {
          var imgsrc = listLi.eq(k).find('img').attr("data-val"), name = listLi.eq(k).find('.i-name').val(), note = listLi.eq(k).find('.i-note').val();
          $li_list.push(imgsrc+"##"+name+"##"+note);
          dd.find('.imglist-hidden').val($li_list.join("||"));
				}else if (type == "quanj") {
					var imgsrc = listLi.find('img').attr('data-val');
					$('#litpic').val(imgsrc);
				}else if (type == "filenail") {
					var imgsrc = listLi.find('.enlarge').attr('data-val');
					dd.find('.imglist-hidden').val(imgsrc);
				}else {
          var imgsrc = listLi.find('img').attr('data-val');
					dd.find('.imglist-hidden').val(imgsrc);
				}
			}
		}else {
			$li_list = [];
			dd.find('.imglist-hidden').val($li_list);
		}


	}



	//逆时针旋转
	$(".listSection").delegate(".Lrotate", "click", function(){
		var t = $(this), img = t.parent().siblings("img").attr("data-val"), url = t.parent().siblings("img").attr("data-url");
		uploadCustom.rotateAtlasPic(pubModelType, "left", img, function(data){
			if(data.state == "SUCCESS"){
        if (typeof hideFileUrl != "undefined") {
          t.parent().siblings("img").attr("src", hideFileUrl == 1 ? url+"&v="+Math.random() : url+"?v="+Math.random());
        }else {
          if (url.indexOf('?') < 0) {
            t.parent().siblings("img").attr("src", url+"?v="+Math.random());
          }else {
            t.parent().siblings("img").attr("src", url+"&v="+Math.random());
          }
        }
				imgListVal(t);
			}else{
				alert(data.info);
			}
		});
	});

	//顺时针旋转
	$(".listSection").delegate(".Rrotate", "click", function(){
		var t = $(this), img = t.parent().siblings("img").attr("data-val"), url = t.parent().siblings("img").attr("data-url");
		uploadCustom.rotateAtlasPic(pubModelType, "right", img, function(data){
			if(data.state == "SUCCESS"){
        if (typeof hideFileUrl != "undefined") {
  				t.parent().siblings("img").attr("src", hideFileUrl == 1 ? url+"&v="+Math.random() : url+"?v="+Math.random());
        }else {
          if (url.indexOf('?') < 0) {
            t.parent().siblings("img").attr("src", url+"?v="+Math.random());
          }else {
            t.parent().siblings("img").attr("src", url+"&v="+Math.random());
          }
        }
				imgListVal(t);
			}else{
				alert(data.info);
			}
		});
	});



	//微信传图
	var wxUploadObj = $('.wxUploadObj'), wxUploadTicket, wxUploadTimer, wxUploadlistSection = wxUploadObj.closest('.btn-section').prev('.list-holder').find('.listSection'), wxUploadType = wxUploadObj.find('.uploadinp').attr('data-type'), wxUploadCount = parseInt(wxUploadObj.find('.uploadinp').attr('data-count'));
	if(wxUploadObj.size() > 0){
		//获取ticket
		$.ajax({
			type: "POST",
			url: "/include/ajax.php",
			dataType: "json",
			data: 'service=siteConfig&action=getWeixinQrCode',
			success: function(data) {
				if(data.state == 100){
					wxUploadTicket = data.info.ticket;
					$('#wxUploadImg').attr('src', data.info.url);
					wxUploadObj.addClass('wxUploadShow');

					//监听是否有图上传
					if(wxUploadTimer != null){
						clearInterval(wxUploadTimer);
					}

					wxUploadTimer = setInterval(function(){
						$.ajax({
							type: 'POST',
							url: '/include/ajax.php',
							dataType: 'json',
							data: 'service=siteConfig&action=getWeixinUpImg&ticket=' + wxUploadTicket,
							success: function(data){
								//当有数据时
								if(data.state == 100){
									var list = data.info;
									for (var i = 0; i < list.length; i++) {
										var fid = list[i].fid, src = list[i].src;

										//往页面写入前验证当前图片是否已经被插入
										var has = false;
										wxUploadlistSection.find('img').each(function(){
											var val = $(this).attr('data-val');
											if(val == fid){
												has = true;
											}
										});

										var alreadyUploads = parseInt(wxUploadlistSection.find('li').length);

										if(!has && wxUploadCount > alreadyUploads){
											wxUploadlistSection.append(getListItemHtml(fid, src, wxUploadType));
											imgListVal(wxUploadObj);
											wxUploadlistSection.show();
											wxUploadObj.next('.upload-tip').find('.deleteAllAtlas').show();
										}

									}

								}
							}
						});
					}, 2000);

				}
			}
		});
	}


	//创建图集列表模板
	var randId = 0;
	function getListItemHtml(fid, src, type){
		randId++;
		if(type == 'desc'){
			return '<li class="pubitem fn-clear" id="SWFUpload_wxupload_'+type+'_' + randId + '"><span class="li-move" title="拖动调整图片顺序">↕</span><a class="li-rm" href="javascript:;">×</a><div class="li-thumb" style="display: block;"><div class="r-progress"><s></s></div><span class="ibtn"><a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a><a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a><a href="'+src+'" target="_blank" class="enlarge" title="放大"></a></span><span class="ibg"></span><img data-val="'+fid+'" src="'+src+'" data-url="'+src+'"></div><textarea class="li-desc inputVal" placeholder="请输入图片描述" style="display: inline-block;"></textarea></li>'
		}else if(type == 'album'){
			return '<li class="pubitem fn-clear" id="SWFUpload_wxupload_'+type+'_' + randId + '"><a class="li-rm" href="javascript:;">×</a><div class="li-thumb" style="display: block;"><div class="r-progress"><s></s></div><span class="ibtn"><a href="javascript:;" class="Lrotate" title="逆时针旋转90度"></a><a href="javascript:;" class="Rrotate" title="顺时针旋转90度"></a><a href="'+src+'" target="_blank" class="enlarge" title="放大"></a></span><span class="ibg"></span><img data-val="'+fid+'" src="'+src+'" data-url="'+src+'"></div></li>';
		}
	}


	//图集排序
	$(".list-holder ul").dragsort({ dragSelector: "li", placeHolderTemplate: '<li class="holder"></li>', dragEnd: function(){imgListVal($(this))}});


	//错误提示
  function showErr(error, txt){
    var obj = error.next('.upload-tip').find('.fileerror');
    obj.html(txt);
    setTimeout(function(){
      obj.html('');
    },2000)
  }


})
