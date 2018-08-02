<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN" "http://www.w3.org/TR/REC-html40/strict.dtd">
<html>
<head>
<title>display/box/float/clear test</title>

</head>
<body>
	<div class="pdfcontainer">
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Satisfy');
	.print {
	  background-color: white;
	  font-family: arial;
		border:none;
	  padding: 1em;
	  font-size: 25px;
	  line-height: 1.5em;
	}

	.to_pdf {
	  height: 0;
	opacity: 0;
	}


	</style>
	    <div class="print" id="fromHTMLtestdiv">
				<div style="margin:.5in;">
				<div style="text-align:center;">
				<img width="400" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/4QAiRXhpZgAATU0AKgAAAAgAAQESAAMAAAABAAEAAAAAAAD/7AARRHVja3kAAQAEAAAAZAAA/+EDQmh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4NCjx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4NCgk8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPg0KCQk8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBMzY1NTAxMDVGRTUxMUU1QjQ5MjhERDNCRTQ3M0FGOSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBMzY1NTAxMTVGRTUxMUU1QjQ5MjhERDNCRTQ3M0FGOSI+DQoJCQk8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMzY1NTAwRTVGRTUxMUU1QjQ5MjhERDNCRTQ3M0FGOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMzY1NTAwRjVGRTUxMUU1QjQ5MjhERDNCRTQ3M0FGOSIvPg0KCQk8L3JkZjpEZXNjcmlwdGlvbj4NCgk8L3JkZjpSREY+DQo8L3g6eG1wbWV0YT4NCjw/eHBhY2tldCBlbmQ9J3cnPz7/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCABHAMgDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9/K8P/bh/4KO/Bv8A4J0+BbXXPi140sfDv9qF00rTI0e61XWpFxlLa1iDSyYZkUvtEaGRN7oGBrxP/gvJ8J/gbqf7F2qfE/4+aZ4o8TeE/hLaz31r4a03xLfaPa+Iry6aGC3tbgWrqXLz+SiyEEwiSRvulwf5K/AHizxj4X8Zz+PPA+n6lobaHPJNFNpNtPdWWiI5ZvIDzGUiJVcriZ3JX7xYkk1FJvUzrSqKm3SScrOybsm+l2k2l3dnbsz+lPxB/wAHO+qaxerP4H/ZN+LmsaG+Ctz4h1Wx8P3TD1Fu3nHHp8/PHrXqH7Nv/Byj8C/in460/wAI/EvSfG/7P3ifVCIrP/hOrBbfR7+XklYdRjZoQAAMvP5K5IUEkgH8eP2J/wDgoFpP7RXw51ibxRLp+g+IvCNm1/q7KSttcWafevI15ZQvAdBnDMuMhwq/IP7U37b3jr9tPV9Q8M+F9M1SHwXG/mx6RY2bXN3eIhys90UDHOfm2KQicD5yN59TEYXCwoqpCbbe39dD8p4a4s4qxudVcuxuDpwp0mueV5Kyeq5X7ym2tUkkrbuJ/alRX8qv/Bsh8MPgX+0z+1fffC34paJr2l/EiYjXfA/i3RPFOqaNqayWSq9zpTCCdY8eTG0yMI1kVYrkGQ5iCf1VV5J+tBRXnf7Sv7Uvg39kfwZpPiHx1qFxpei6xrth4diu47SS4jgur2YQwGYoD5URdgDI+FXIyckA+iUAFFeN/ttft8fC3/gnf8NNH8X/ABa8RN4a8P67rlv4etLoWc10DdzJJIoYRKxVFjhldnOAAh7kA+yUAFFed/tPftS+Df2QPhnF4s8cX9xY6Tc6rY6LbrbWkl3cXd3eXCW8EMUMYLuzO4OFBIVWPavRKACiiigAooooAKKKKACivM/hr+114G+Lf7SHxM+E+h6lc3Pjb4Rppcnia0ezkjjtBqNu1za7JWASTdEu47CduQDzkD0ygAoorg/gn+0l4S/aE1fx1Y+Fr64vbj4b+JZvCWuiS1kgFvqMMEE8kalwN6hLiL51ypJOCcUAd5RRRQAUUUUAfm3/AMHJHgjTfjp4D/Za+FPiC4uLfwp8Tvj34d0XXRBO0L3Vm8d0j24ZeQXMi4b+FlQ9q+oPjT+1r8Gf+Cay/CP4ZS6XcaG3j6/Ph/wX4W8JeHJbpisPlmZo7a2QhIYRNGzkDIEmQG5x8O/8Ha/hfWvGf7O37Pum+G9UbQ/EVx8Vbb+ytQV2jNndrp940EgZeV2yKp3DleuDjFew/sAftD/BH/gvd+zv4T1L4o+CvCmrfGD4KarE3iDQLtP9K8L61CwVrm3w2/7JO8O9RueNjH5bl2hJFcrtzdDFYim6roJrnSTt1s20n96aPnD/AIOF/wDgkh8FvEvxl/Z58ZaPod14H8QfGb4v6J8NfGc3hmVNPi17TNSaaWaWWIIU+1K1sCswUFvMbzRLtj8v7s8ffGT9nf8A4IkfCP4d+Ex4ab4a/D/xJq0egWFzougTz6bZXJVVWXUbtFba8nygzXDtLKQ7EuEkZfI/+C737Pv7QP7QHiP9ldfgh4f8J69a+C/i7p3irWH1bzs6Xc2isbO6m2Mo/s9Ee8+0Bf3xY2wiySwP1h+0v+yb8JP2jZ/C/iD4qeEvDfiRfhnePr2kXWsj9xo8qqC8xywQqBGrMJMp+7UkfKCJNOVLVHwr/wAFwP2evCHwx/be/Ys+PXh+xtdD+KGofHTw74G1G/s1SGXW9LvhKkwuMDdK0ccQiRiflS4dTkFQP0+r+fn9v79t7WP+CmH/AAVJ/Zd8feEFkh/Z4+F/x38L+DfC+oSgr/wmurXOpJLfalCvH+jRLZRwoWzncWU5klSP+gaufD4qjX5vYyUuVuLtraS3Xqr69no9TapSnC3OrXV16PqfNv8AwWC/Zuk/a2/4Ji/GzwJaw3Nxqmo+GLi/0qG3JEk2oWW2+s0BHrc20I/Gu4/YM/aOT9rz9iv4V/E5ZLeS48ceF9P1a8WA/u4LuSBDcxD/AK5z+Yh90NetV8Lf8EKIT8FPhr8av2e5oo7H/hn34o6zo2i2ef3y6Dfy/wBq6bM/A/1iXkoHXiP0AroMzzj/AIKmfAhv+Cmv/BRzQ/gDG6ppfw9+DPirxXeSyqs1mNW1uB9D0sSKQQs0AN1cxk4I+8O1fUH/AASE/aXuP2uv+CaHwb8dag95Jrd74di03W3u0KTvqdizWN6zqQCC1zbTNg9iK8p/4JAw/wDC8/j1+1h+0LKshi+JfxHbwnoMolMltd6J4ch/s62uIMnhZbg3rMABluevQ/4JUhvgH+2P+1/8B5vNWz0Hx3D8SPD5kKxxtp3iO3+0vBbxjH7m3vILpDgYDSY7igCv/wAFIUP7Rv8AwU5/Y7+CkardaX4f17UPjJ4kWJiJrBNGt/K0uRhj/VyX10VPPWPoeK9y/a1/4Kf/AAL/AGIPFOl+HfiJ49s9P8Wa4gfTvDenWdzrGt3itu2MtlZxyzhGKOFdkCEowDZU48N/YajX9pT/AILFftW/GJ44rzSfhvbaR8FfDN+h+4bZDqWswMMdVvbiAZB/h5HSvp342/Ez4M/sqavN8SviHrXw3+H2p6lZpoz+JdcuLPTbu/t4meZLMXMpWSVVZ3dYQzYZ2IXJOQDyT4T/APBaD4C/FD4w6D8P73WfFnw/8Z+LJfI0HS/HXhLU/DLa3JlVVLaW8gjikkZnRVjD73Z1VVJIFe6eOP2kPBPw2+NfgX4da5r0On+MviZHqMvhnTpIJSdWGnxRzXYSRVMatHFKj7XZWZdxUNsbH5o/8Fc/+CxX7Ef7YH7AHxa+H4+Kmk+KPEjeH72+8MLZaJqkv2fXLaB5dPlhuktvLicXCxjf5ijazqzbWavVf20dE8YftX/8EX/g/wDHvQoftXxm+Fug+G/jVohj3J9tvbexiur+0YRjfJHc2st3H5K4Ds0YPQCgD9Ea4n4jftG+C/hN8T/AfgvxBrsNj4q+J13dWPhjTBDLNcarJa2zXVyVEatsjihQs8j7UXKgtudQbHwC+N2gftK/A/wj8QvCtxJdeG/G2j2ut6bJIoWTyLiJZUDrk7XAbDLnKsCDyK+Qf2Vd37b/APwV3+MHxkuNtz4I/Z5t2+EHglS2+KTWG2XPiC9CMMxzI5trIOh2vHG47GgD179pT/gq58Ff2XPi5/wrvWNe1vxH8RltRfS+FPCPh6/8SavawEIRJPDZRSfZwVdGAmKFlYMoIOavfslf8FQPgn+2v411jwp4F8Xyf8Jt4diE+p+Ftb0u70PXLOM4y5tLyKKV0XcgZ4w6KXQFgWUH5O/4JwftIeA/2F/2yP2kPhF8a7uz+G3xY+IvxU1bxpoWteI3FrZ+P9EvJE/s42d9JiKRoEbyPsofMbblQFxMqfo3ceAdCu/HNr4ol0XSZPEtjZS6bbas9nG19b2srxyS26TY3rE7xRMyAhWaNCQSowAcT8NPiJ8LfEH7S/xQ8O+F10P/AIWh4bt9Hk8cm10swXpiuIZ2037Tc+WBcfukn2KHcxqSCE3AGP8Aav8A21PhX+w58O18VfFbxro/g3R5phb2pui8t1qEpIHlW1tErz3EnIJSFHYDJIABI+b/ANiL/lNr+3T/ANgr4cf+mzUq53/gnp4Gsf22v+CiX7Q/7RXjW0XV734V+N774QfDizv41lh8K2mmJGmoXtqPuia8uZZMzY81URow4jcqQD0/wD/wWy+AHjH4g6J4Z1bWvF3w91LxTcfZtBk8c+D9V8NWWtyEEhYLq8gjgLNwFVnVnLKFBJArC/4JDf8AJTf2yv8As4HV/wD006PX1J8dfgV4Q/aa+EWv+A/H3h/T/FHhDxRatZ6npl6haK4jJBBBBDI6sFdJEKujqrqysoI+D/8Ag3S8Aa58C/hZ+1B4T8W+INR8Sal4K+OWs6NLreqOGutStrTS9Khgupm7u9vHE7MSSSSSScmgD66/a7/b/wDg/wDsI6LpN58VPHGm+GZvEE/2bSNOEU19qmryblUrbWVuklxPhnQMY42Cl13Ebhny/wCHX/Ba34B+Nfifofg3WNX8YfDbxF4qm+z6Fb+PfCGp+GItafssFxeQJAzMSqqhcM7OqqGYgV8Z/wDBJn/goz+zH4nuPFP7Tnxq+Mfwy0747/FrU7z7PZ69rNsL/wAA+HoLmaDT9Ft1LEQJ5KCeQoEaZ5w0m9lDV9OftRf8FFv2Ef2y/gN4l+GvxA+Onwa1vwv4rs3s7qGXX7UvASPknhZsiOaJsPHIBlHVWHIoA+4qK+Qv+CD/AO0Nrn7TP/BKv4V+IPE2tR+JPEOmQXvhy+1ZJ2uP7UOnX1xYxXJlYlpGlhgikZySWaRiTk0UAfPn/Bzl/wAiV+y//wBlhs//AEgvK/Iv4c2PiD4KeCvC/wAWPhHrjfD/AOM99+0H4h8HxeJrfJW5sJIlnFreQ8x3EAlQHbIjcM3B4A/XT/g5y/5Er9l//ssNn/6QXlflJ4X/AOTbPh//ANnX6z/6S16FCKlSUX/N/kfnvEGKq4bMqtei7SjQuvVOo166n6V/sg/8HY/wx1P4cahZ/tF+H9Y+GnxA0Nrm0R9D0m71TRPGFzbP5UkemsoeSOUygr5U52IGTM53HbxX7QHxL+OH/BZq8Wz+IGm618Bf2aEufOTwKlx5Xivx7GpBjOrSrzZ2xxuNqmGyWB3lYbhPiL9nhP8AhE/A/wAAfGVnuXXNP/ak1zwzE68N9j1WJIbsfTbCn0yfWv1e6mv5n8ePEjNuHqlPKsrtD20HJ1L3ktWmoraL/vavXRRaTP3/AMLchwmdYd4/G3bg0uX7Ldr3b6ry0821ofMf7ZvhPSvAPiz9jLQ9D06z0jR9L/aL8D2tjY2kQigtYkmuAERBwAB/jX7gV+NXiHww37TX/BXj9ln4W2scl1a+Bb29+LniXy13f2fBYRmHTZW9nvn8v1G5Tzmv2Vr6bwJwtelwhRqV73qSqT13acmru/e179U7nN4gVacs6qRpbRUY+WiWny2Cvyz/AG/P2hH/AOCU/wDwUU+PXxOthY6Xpvxo+AU+v2NzcDP9p+LvDsv2S0h6dDbajag8noOOlfqZXzn+3/8A8EuPhb/wUov/AIa3HxIh1pn+FviBNe00adcRQrejdG0tlciSN99rMYYfMVNjnyl2uvOf2I+LND/glr+y5/wxb/wTv+D3wzktBY6l4Z8M2o1aEHcF1Kcfab4597qac/jXzz+33460/wDYV/4Kz/BX4+aqZLbwf448B+JPh14uvXk2wWS2ED6/p7Bc4aaRre9jXPODjODX6BV4H/wUh/4JxfD/AP4Kkfs4n4ZfEebxBZaPHqlvrFrfaJcxW9/Y3MIkQPG8sUsfzRSzRsGRspK2MHBAB5h/wQO+GWreDf8AgmV4L8VeJlhbxp8Zrq/+J3iK5iGBfXWs3L3kcp5Jz9le2U5J+5XmH/BMH4JeDf20/wBqD9pD44fFTTtL+IPxM8IfFvXPh/oMet263kXgTR9LkSOztbKCXdHbyOrNNJNEqtI07nOWkLfoV4S8Kad4E8K6Zoej2kWn6To1pFY2VrEP3dtBEgSONfZVUAewr5h+PH/BKLQ/Hf7Q2rfF74Z/Ej4kfAf4meI4Yodf1LwhdW7af4o8ldkD6jp91FLb3EkSF1RwqMPMbJagDH/4L1/tL6T+zT/wSp+Lwu1e61jx54dvvBeg6dB/x8X13f2ssBMa9xBAZ7l+wjtpD2r0/wD4Ja4/4dkfs546f8Kw8NY/8FVtXmGi/wDBGLwb4obxZrHxY+IHxM+NXjzxX4Y1PwlF4l8T31uJPCtjqVq1rejR7SGFLSwklibDSrE0hG5S2x3Rvpv4EfB3Sv2d/gd4N+H+hSXs2h+BdCsfD2nSXkgkuHt7S3S3iMjKqhnKRqWIUAnJwOlAH5l/D39rG5/4I1/AD9rL4ILZST6l8G7seIvgxYJbeZ/bGmeJbll0qygiz5twLTV5preVv7pAHC192/8ABNj9kGP9hL9iL4e/DJrhr/WND07z9ev3nadtT1e5drm/uDI3zuHupZipbJCbF7V8r/tKfAbwj+3Z/wAHAnwjjh0e3vW/ZZ8JS+KfGWqIQ8ct9fXCPoGlTbWDJLBJBPqKBgVIwcfNz+jVAHA/GP4EfDP9sb4ZNoXjjwv4Q+I3hS6ZmW31Ozh1G2WQbozJGWDBJF+YB0IdTnBBFfDnwu+FN1/wSQ/4KifA34MfDXxV4q1T4F/tBaX4iih8C67qMuqQfD+70izjvFudNuJi8yW0wcxtbuxUSSF9zFkWP0xP+CLOjfB3xdq2rfs//GP4vfs72etXMl7c+F/DN7a33hNLiVi0s0Ol30E0Vu7nAxCURVVVVAAAPQ/2TP8Agmd4b/Zp+MusfFLXvGnj/wCL/wAWtc08aRL4t8Z6hHc3GnWG4SGxsYIY4re0tjKDIUjjyWZiWOcUAeY/sRf8ptf26f8AsFfDj/02alWT/wAEjPE0fwS/a2/a8+AfiK4S18YWfxR1L4oaPbyDy/7S8P66IbiKe3DHMywz+ZDK6ArHI8aEhjivqT4X/sj+GfhL+1D8VPi1pl1rUniT4wW2i2utwXE8b2UC6VDPDbm3QIHQslw+/c7glVIC854z9tf/AIJo/D79t/X/AA34n1S+8W+BfiT4K3r4d8d+DNUOk+ItHjfPmQpOFZZIXVnVopUddssmApdiQD3nxH4j0/wd4ev9X1e/s9L0nS7eS8vb28nWC3s4I1LySySMQqIqgszMQAASTivzw/4N7vjLY/te/DD9qzxxDDdroHj/AOOmu6hpq3MDW802mT6ZpZtHZG5UvatE3/AsivSb/wD4I7zfGeWzsvjp+0H8avjd4PsZklPhDUrmx0bQdWCEPGuoQ6fbwveqkixyBZZNhZBuVhxX0F+zT+yR4W/ZT1D4iXHheTVCvxL8VzeMNRgupI2hs7qS0tbUw2yoieXAsdpGVRtxBZvm27VUA+Qf+CBw0Hw7+y5qX7OnjjR9DX4xfs26td+FvEdldafGk95ZtcyT6dqUKuN7WtxayxFJD94qx6MpP3d/wqbwr/0LPh//AMF0P/xNeL/tjf8ABMj4c/tl+NtE8aX114v+H/xQ8M27Wek+PfA2sNoviOytmbc9sZ1DJPA2WHlTxyIokl2hfMfd5lr/APwSH8T/ABf0/wDsT4o/tXftEeOvBf8Aq5/D9re6d4eh1a3IKvbXs9haRXE8LoSrKJELAnmgD7F8KjS/+EdtG0P+z/7Jmj821Njs+zujfNuTZ8pDZzkcHOaKyfg18GvC37PPws0HwT4J0Ow8N+FPDNoljpmm2abYbWJegHUsxJLMzEszMzMSxJJQB+c3/BziufBH7MDenxhsh/5IXtflH4X/AOTa/h//ANnX6z/6S1+tP/Bzl4O8Wat8APgj4k8M+B/Gnjy38DfE221vV7TwxpEup3lraJYXoaVo4wSqBiql2wgLKCwLDP4L+Hf2n/8AhY2i2/wt1jWH+CtppPxM1P4jJr99pOoajrnm3cfkx2tvZW8DKJY1yxMkiAsww67fm3ljKeGw/tal2ou7UYuTtptGKbfok2fGZtkeKx+Y1IUUkp0eRSbSim3Pdt9Lps+lP+CYFnqP7SX7TGj+FIbG4j8I/Afx14o8da5dyL+5vNTv3W1022XuHi+zyzg9CBKOoBr9Iv2nf2m/CH7IPwZ1Tx1421D7FpGnDy4YY8NdapcsCY7S2QkeZNIQcDgKAzsVRGZfl39hH4l6pq3wfXwB+xj+zl8SviBZ2N9NFqHi/wAWiLQdFn1H5RcXV5eysGubhfkMkKiOQKFVFACLX0R/wQ5/Ynb9qv49/FD40ftGX1r8QPi18Avijq3w+8PafbsT4U8Lz2Edo73mn2rIpaUyynZNMC4EMMmBKodf5azzw/znj3ib+1c2pvC4KmlGMZW9rKCbfwq/K5Nu7lZxVklKx+/5LnmA4YyVZfgpKtXesmr8ik0lu90uiW/dH0R/wQ7/AGH/ABf8J/DHjT49fGLS/wCy/jR8eJoLy50mWILJ4N0SFdthpIyNyyKhDzZ2kt5auvmRFm+9qKK/pbB4SjhaEMNh4qMIJRilsklZJeSR+b1q06tR1ajvKTbbfVvdhRRXjf7T3i8eHvHHgmzvPEmteGtF1AX7Xs+mEiZ2jjiMY+VHONzH+HvXQZnslFee/s265rGveDNRk1K41S/sodUmi0e91K2+z3d9YgJ5cki7VOdxcBiqllUEjmrXhTxFfXvx/wDGWmzXUklhYaZpcttAfuRNI13vYe7bFz/uigDuKK4f4CeIr7xL4c1yW/upLqS38R6raxM+MpFHeSqiDHZVAA9hXmfxE8R6pqHxw8YWTah8TGs9Jt7I2lv4WRHWIvCzPvDKRlmAxnrz2oA+hK8I/a//AGWfiT8dfEGg618Nf2gPG3wV1TRoJrSaHTtG03WdL1KKVkZmmtbyFgZl8tQkgb5FLgL87Z9J+Avia88YfBzw7qWpX1rqWo3Nkn2u4t12o8w+VwRgYYMCrDAwwYYHSqvwz8RX2rfE/wCIlnc3Us1rpep2sVpG2NtujWFu7KvsWZm+pNAHE/sM/sG+E/2EPAet2Gi6j4g8VeKPGWqSa74s8XeIrsXmteJ79+PNnkAVVREASOKNVRFHALtI7+3U2Q7Y2PtXFfs2eIL7xX8BfCepaldSXl9eabFJPPJ9+ViOSfegDt6K+fvGms6p4V+KWq3ni7V/H3h/T11GNtK1TSysmhQWn7sIlwgVgrM5ZWaVOrAggYr3+Q4jb6UAOor5r0n9o3WL/wDZy8Mj7L4wj1ud9LSbW5dOK2k267gEhM33SHUsucfMWx3r6G8S3Mll4c1CaJiksNtI6MP4SFJBoAvUVynwJ1m68Q/BLwfqF9cSXV7faLZzzzSH5pZGhRmY+5JJrzbwl8Z9c8JfFfxNJ4guDdeCrnxG+iw3TAf8SO5EcJiDkDiCXzAu48K4Gcb8kA90org/2YfEmoeLvgB4V1LVbqW81G8sVeeeXG+RskZOO/FcbruoXvxK8S+Nr7UNc8Yabong+/j0qz07w0JBeSyGOJnuHWJWkly0qhVxsVUYkHk0Ae3UVy/wY8SW/iz4ZaTe2uqX2tRlHgN7e2/2e4neKRon3x7V2sHRgeB079aKAOoooooA8M/YJ/Yisv2E/AHjTQbHxFe+JF8Z+N9X8ayz3NssDW0moSrI0ACk7lTbgMeTknA6UfsQfsQWP7E8/wAYpLHxBea//wALe+Jer/Ei4FxbLD/Zs2oCANaptJ3onkjDnBO7kcclFAHudFFFABWPrHgex1zxfouuT+d9u0FbhbXa+ExMqq+4d+FGPSiigDYri/HvwSsvG/iaLWoNW1/w7rC232KS70m6WF7mDcWEbh0dSAxYg4DDccGiigDc8B+BtP8Ahv4UtNF0uOSOzsw23zJDJJIzMXd3Y8szMzMSe5Ncz4o/Z9sfEfjLUNch17xXot5qiRJdLpeo/Zo5vKUqhICk5AJHXvRRQB1HgfwVp3w68K2ei6TC1vYWKkRqzmRiWYszMzElmZmZiT1JNcr4g/Z5s9a8W6rrFv4i8YaLca1JHLdR6bqX2eF3SJIg23aedqL3oooA75I9sITLNgbck8n61l+A/Bdl8OfBum6Fp3nfYdJt1toPNfe5VRgZPc0UUAcj4k/Zr0vxRqV6bjW/FQ0jVLj7Ve6KNR3afdOW3sCrKXVGbkojqpyRjHFeiMNy49aKKAORj+Cuix/C3TfB4+2f2Ppf2Xyf3370/Z5UlTc2OctGM8DIz0rqb6zj1Gxmt5QTHcI0bgHGQRg0UUAUvB/ha18D+EtL0Wx8z7HpNpFZweY259kaBF3HucAZNZtt8J9Eh0rxFYy2pvLLxVdyXmoQTtvSR5I0jYDuoxGuMcg8g0UUAXPAPgiy+G/g3T9D03zvsOmxCGEzPvkIyTye55rnvF3wHsfEfiu51yx1nxF4Z1TUI0ivptHulh+3qgwnmq6OpZV4DgBgOM4xRRQB0PgPwNp/w28J2mi6VHLHY2e8r5srSyOzuzu7MxJLM7MxPqx6dKKKKAP/2Q==">
				</div>
				<p>Dear <span id="pdf-school"></span> Educators,</p>
				<p>Thank you for your interest in Wayside Publishing! Your digital review account includes FlexText® eBooks (Student and Teacher Edition digital textbooks) and Explorer courses (online audios, videos, activities, and exercises curated and created specifically for each title).</p>
				<p>Please feel free to share this login with others in your department. If you have requested print copies they will be shipped via UPS ground.</p>
				<p>To access your digital review, please follow these instructions:</p>
				<ul><li><p>1. Go to learningsite.waysidepublishing.com and log in with your username and password.*</p>
				<p style="margin-left:15px;margin-bottom:0;">Username: <span id="pdf-username"></span> </p>
				<p style="margin-left:15px;">Case-sensitive password: <span id="pdf-password"></span></p></li>
				<li><p>2. Once you\ve logged in, you will see both a Courses section and a FlexText Library on your Dashboard. The following programs are available for your review:</p>
				<p style="margin-left:15px;"><i id="pdf-books"></i></p></li>
				<li><p>3. Click "View Course" or "View FlexText" under each title to explore the content.</p></li></ul>
				<p>Your digital review materials will be available until <span id="pdf-date"></span>. Please let us know if you have questions or need assistance during your review. If you need more time, please contact us.</p>
				<p>Thank you for considering our language learning programs for adoption.</p>
				<p>gmosse@waysidepublishing.com</p>
				<p> &nbsp; </p>
				<p>* For best results, we recommend using the free Google Chrome browser.</p>
			</div>
	  </div>
	  </div>
		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


<script type="text/javascript" src="jspdf.debug.js"></script>

<script type="text/javascript">

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function core() {
	var url_string = window.location.href;
	var url = new URL(url_string);
	var accountsToMake = JSON.parse( url.searchParams.get("j") );
	console.log(accountsToMake)
	for (var i = 0; i < accountsToMake.length; i++) {
		await sleep(1000);
		$('#pdf-username').text(accountsToMake[i].username);
		$('#pdf-school').text(accountsToMake[i].school);
		$('#pdf-date').text(accountsToMake[i].date);
		$('#pdf-password').text(accountsToMake[i].password);
		$('#pdf-books').text(accountsToMake[i].books);
		var pdf = new jsPDF('p', 'pt', 'a4');
		var schoolname = accountsToMake[i].school;
		pdf.addHTML($('#fromHTMLtestdiv'), function() {
			pdf.save(schoolname+'.pdf');
			//setTimeout(function(){ window.close(); }, 2000);
		});
	}
}

$(function () {
	core();
});

</script>
</body>
</html>
