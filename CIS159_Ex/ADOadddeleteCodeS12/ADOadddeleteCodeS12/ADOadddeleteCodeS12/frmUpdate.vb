Public Class frmUpdate
    Dim currpath As String = System.Environment.CurrentDirectory
    Dim conStudent As New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0; " & _
                                       "Data Source=" & currpath & "\stu2000.accdb")
    Dim daStudent As New System.Data.OleDb.OleDbDataAdapter("SELECT * FROM tablestu ORDER BY Idno", conStudent)
    Dim cbStudent As New System.Data.OleDb.OleDbCommandBuilder(daStudent)
    Dim DsStudent1 As New DataSet
    Dim currMang As CurrencyManager
    Dim newRecord As DataRow
    Private Sub frmUpdate_Load(sender As System.Object, e As System.EventArgs) Handles MyBase.Load
        Try
            daStudent.Fill(DsStudent1, "tablestu")
            'DsStudent1.Tables(0).TableName = "tablestu"
        Catch err As SystemException
            MsgBox(err.Message)
        End Try
        'txtCity.DataBindings.Add("Text", DsStudent1.Tables(0), "City")
        'txtCredits.DataBindings.Add("Text", DsStudent1.Tables("tablestu"), "Credits")
        'txtGPA.DataBindings.Add("Text", DsStudent1.Tables("tablestu"), "GPA")
        'txtIdno.DataBindings.Add("Text", DsStudent1.Tables("tablestu"), "Idno")
        'txtMajor.DataBindings.Add("Text", DsStudent1.Tables("tablestu"), "Major")
        'txtName.DataBindings.Add("Text", DsStudent1.Tables("tablestu"), "Name")
        'txtState.DataBindings.Add("Text", DsStudent1.Tables("tablestu"), "State")
        'txtYrEntered.DataBindings.Add("Text", DsStudent1.Tables("tablestu"), "YrEntered")
        txtCity.DataBindings.Add(New Binding("Text", DsStudent1.Tables(0), "City"))
        txtCredits.DataBindings.Add(New Binding("Text", DsStudent1.Tables("tablestu"), "Credits"))
        txtGPA.DataBindings.Add(New Binding("Text", DsStudent1.Tables("tablestu"), "GPA"))
        txtIdno.DataBindings.Add(New Binding("Text", DsStudent1.Tables("tablestu"), "Idno"))
        txtMajor.DataBindings.Add(New Binding("Text", DsStudent1.Tables("tablestu"), "Major"))
        txtName.DataBindings.Add(New Binding("Text", DsStudent1.Tables("tablestu"), "Name"))
        txtState.DataBindings.Add(New Binding("Text", DsStudent1.Tables("tablestu"), "State"))
        txtYrEntered.DataBindings.Add(New Binding("Text", DsStudent1.Tables("tablestu"), "YrEntered"))
        'gives me access to the currency manager for the data source
        currMang = CType(Me.BindingContext(DsStudent1.Tables("tablestu")), CurrencyManager)
    End Sub

    Private Sub btnAdd_Click(sender As System.Object, e As System.EventArgs) Handles btnAdd.Click
        newRecord = DsStudent1.Tables("tablestu").NewRow
        newRecord("Idno") = InputBox("Enter idno", "New Record")
        newRecord("Name") = InputBox("Enter name", "New Record")
        newRecord("Major") = InputBox("Enter major", "New Record")
        newRecord("City") = InputBox("Enter city", "New Record")
        newRecord("State") = InputBox("Enter state", "New Record")
        newRecord("GPA") = CSng(InputBox("Enter GPA", "New Record"))
        newRecord("YrEntered") = InputBox("Enter Year Entered", "New Record")
        newRecord("Credits") = CInt(InputBox("Enter credits", "New Record"))
        DsStudent1.Tables(0).Rows.Add(newRecord)
    End Sub

    Private Sub btnDelete_Click(sender As System.Object, e As System.EventArgs) Handles btnDelete.Click
        currMang.RemoveAt(currMang.Position)
    End Sub

    Private Sub btnEnd_Click(sender As System.Object, e As System.EventArgs) Handles btnEnd.Click
        daStudent.Dispose()
        Me.Close()
    End Sub

    Private Sub btnChangeDatabase_Click(sender As System.Object, e As System.EventArgs) Handles btnChangeDatabase.Click
        If currMang.Position = currMang.Count - 1 Then
            currMang.Position -= 1
            currMang.Position += 1
        Else
            currMang.Position += 1
            currMang.Position -= 1
        End If
        'daStudent.Update(DsStudent1, "tablestu")
        Try
            daStudent.Update(DsStudent1, "tablestu")
        Catch ex As Exception
            MsgBox(ex.ToString)
            DsStudent1.Tables(0).Rows.Remove(newRecord)
        End Try
    End Sub

    Private Sub btnLast_Click(sender As System.Object, e As System.EventArgs) Handles btnLast.Click
        currMang.Position = currMang.Count - 1
    End Sub

    Private Sub btnFirst_Click(sender As System.Object, e As System.EventArgs) Handles btnFirst.Click
        currMang.Position = 0
    End Sub

    Private Sub btnNext_Click(sender As System.Object, e As System.EventArgs) Handles btnNext.Click
        currMang.Position += 1
    End Sub

    Private Sub btnPrevious_Click(sender As System.Object, e As System.EventArgs) Handles btnPrevious.Click
        currMang.Position -= 1
    End Sub
End Class
