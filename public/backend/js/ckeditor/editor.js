var element =  document.getElementById('elm1');
		if (typeof(element) != 'undefined' && element != null)
		{
			CKEDITOR.replace('elm1',
			{
				fullPage: true,
				allowedContent: true,
			});
			
		}