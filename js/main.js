
$(function(){

	$("#all").click(function(e){

		e.preventDefault();

		/* load all students with there centers */

		$.get("/api/students/all", function(response){

			var res = "<table class='table  table-striped'> <thead>	<tr>	<th>	S/N	</th>	<th>	Student Name	</th>	<th>		Center		</th> </tr>	</thead> ";


			for (i=0; i < response.data.length; i++){

				res += "<tr>	<th> "+ (i + 1) + "	</th>	<th> "

						+ response.data[i].candidate_name + "	</th>	<th>"	

						+ response.data[i].centre_name + " </th> </tr>";

			}

			res += "</tbody></table>";

			$("section").html(res);

		});

	});


	/* Load Based on category */


	$("#mycat a").click(function(e){

		e.preventDefault();

		var cat = $(this).data("cat");

		/* load all students with there centers in the selected category */

		$.get("/api/students/category/" + cat, function(response){

			var res = "<p> " + cat + " Students  </p><table class='table  table-striped'> <thead>	<tr>	<th>	S/N	</th>	<th>	Student Name	</th>	<th>		Center		</th> </tr>	</thead> ";


			for (i=0; i < response.data.length; i++){

				res += "<tr>	<th> "+ (i + 1) + "	</th>	<th> "

						+ response.data[i].candidate_name + "	</th>	<th>"	

						+ response.data[i].centre_name + " </th> </tr>";

			}

			res += "</tbody></table>";

			$("section").html(res);

		});

	});


	/* load numbers in each category */

	$("#stat").click(function(e){

		e.preventDefault();

		$.get("/api/students/statistics", function(response){

			var res = "<table class='table  table-striped'> <thead>	<tr>	<th>	S/N	</th>	<th>	Category	</th>	<th>	Number of Students	</th> </tr>	</thead> ";

			catx = ["Science", "Art", "Commercial"];


			for (i=0; i < response.data.length; i++){

				res += "<tr>	<th> "+ (i + 1) + "	</th>	<th> "

						+ catx[i] + "	</th>	<th>"	

						+ response.data[i][catx[i]] + " </th> </tr>";

			}

			res += "</tbody></table>";

			$("section").html(res);

		});

	});


	/* Default Load */

	$("#all").click();


}); 