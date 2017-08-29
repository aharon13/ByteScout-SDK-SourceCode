﻿Imports System.IO
Imports System.Net
Imports Newtonsoft.Json.Linq

Module Module1

	' (!) If you are getting '(403) Forbidden' error please ensure you have set the correct API_KEY

	' The authentication key (API Key).
	' Get your own by registering at https://secure.bytescout.com/users/sign_up
	Const API_KEY As String = "***********************************"

	' Direct URLs of image files to convert to PDF document
	Dim SourceFiles As String() = { 
		"https://github.com/bytescout/ByteScout-SDK-SourceCode/raw/master/Cloud%20API/Image%20To%20PDF/C%23/Convert%20Images%20To%20PDF%20From%20Uploaded%20Files/image1.png",
		"https://github.com/bytescout/ByteScout-SDK-SourceCode/raw/master/Cloud%20API/Image%20To%20PDF/C%23/Convert%20Images%20To%20PDF%20From%20Uploaded%20Files/image2.jpg" }
	' Destination PDF file name
	Const DestinationFile As String = ".\result.pdf"

	Sub Main()

		' Create standard .NET web client instance
		Dim webClient As WebClient = New WebClient()

		' Set API Key
		webClient.Headers.Add("x-api-key", API_KEY)

		' Prepare URL for `Image To PDF` API call
		Dim query As String = Uri.EscapeUriString(String.Format(
			"https://bytescout.io/v1/pdf/convert/from/image?name={0}&url={1}",
			Path.GetFileName(DestinationFile),
			String.Join(",", SourceFiles)))

		Try
			' Execute request
			Dim response As String = webClient.DownloadString(query)

			' Parse JSON response
			Dim json As JObject = JObject.Parse(response)

			If json("error").ToObject(Of Boolean) = False Then

				' Get URL of generated PDF file
				Dim resultFileUrl As String = json("url").ToString()

				' Download PDF file
				webClient.DownloadFile(resultFileUrl, DestinationFile)

				Console.WriteLine("Generated PDF file saved as ""{0}"" file.", DestinationFile)

			Else
				Console.WriteLine(json("message").ToString())
			End If

		Catch ex As WebException
			Console.WriteLine(ex.ToString())
		End Try


		Console.WriteLine()
		Console.WriteLine("Press any key...")
		Console.ReadKey()

	End Sub

End Module
