<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class frmUpdate
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.txtState = New System.Windows.Forms.TextBox()
        Me.btnDelete = New System.Windows.Forms.Button()
        Me.btnEnd = New System.Windows.Forms.Button()
        Me.btnChangeDatabase = New System.Windows.Forms.Button()
        Me.btnAdd = New System.Windows.Forms.Button()
        Me.btnLast = New System.Windows.Forms.Button()
        Me.btnPrevious = New System.Windows.Forms.Button()
        Me.btnFirst = New System.Windows.Forms.Button()
        Me.btnNext = New System.Windows.Forms.Button()
        Me.txtCredits = New System.Windows.Forms.TextBox()
        Me.txtYrEntered = New System.Windows.Forms.TextBox()
        Me.txtGPA = New System.Windows.Forms.TextBox()
        Me.txtCity = New System.Windows.Forms.TextBox()
        Me.txtMajor = New System.Windows.Forms.TextBox()
        Me.txtName = New System.Windows.Forms.TextBox()
        Me.txtIdno = New System.Windows.Forms.TextBox()
        Me.SuspendLayout()
        '
        'txtState
        '
        Me.txtState.Location = New System.Drawing.Point(236, 86)
        Me.txtState.Name = "txtState"
        Me.txtState.Size = New System.Drawing.Size(77, 20)
        Me.txtState.TabIndex = 40
        '
        'btnDelete
        '
        Me.btnDelete.Location = New System.Drawing.Point(92, 238)
        Me.btnDelete.Name = "btnDelete"
        Me.btnDelete.Size = New System.Drawing.Size(72, 40)
        Me.btnDelete.TabIndex = 39
        Me.btnDelete.Text = "Delete to DataSet"
        '
        'btnEnd
        '
        Me.btnEnd.Location = New System.Drawing.Point(252, 214)
        Me.btnEnd.Name = "btnEnd"
        Me.btnEnd.Size = New System.Drawing.Size(72, 40)
        Me.btnEnd.TabIndex = 38
        Me.btnEnd.Text = "End"
        '
        'btnChangeDatabase
        '
        Me.btnChangeDatabase.Location = New System.Drawing.Point(172, 214)
        Me.btnChangeDatabase.Name = "btnChangeDatabase"
        Me.btnChangeDatabase.Size = New System.Drawing.Size(72, 40)
        Me.btnChangeDatabase.TabIndex = 37
        Me.btnChangeDatabase.Text = "Change Database"
        '
        'btnAdd
        '
        Me.btnAdd.Location = New System.Drawing.Point(92, 190)
        Me.btnAdd.Name = "btnAdd"
        Me.btnAdd.Size = New System.Drawing.Size(72, 40)
        Me.btnAdd.TabIndex = 36
        Me.btnAdd.Text = "Add to DataSet"
        '
        'btnLast
        '
        Me.btnLast.Location = New System.Drawing.Point(284, 310)
        Me.btnLast.Name = "btnLast"
        Me.btnLast.Size = New System.Drawing.Size(64, 23)
        Me.btnLast.TabIndex = 35
        Me.btnLast.Text = "Last"
        '
        'btnPrevious
        '
        Me.btnPrevious.Location = New System.Drawing.Point(220, 310)
        Me.btnPrevious.Name = "btnPrevious"
        Me.btnPrevious.Size = New System.Drawing.Size(64, 23)
        Me.btnPrevious.TabIndex = 34
        Me.btnPrevious.Text = "Previous"
        '
        'btnFirst
        '
        Me.btnFirst.Location = New System.Drawing.Point(92, 310)
        Me.btnFirst.Name = "btnFirst"
        Me.btnFirst.Size = New System.Drawing.Size(64, 24)
        Me.btnFirst.TabIndex = 33
        Me.btnFirst.Text = "First"
        '
        'btnNext
        '
        Me.btnNext.Location = New System.Drawing.Point(156, 310)
        Me.btnNext.Name = "btnNext"
        Me.btnNext.Size = New System.Drawing.Size(64, 24)
        Me.btnNext.TabIndex = 32
        Me.btnNext.Text = "Next"
        '
        'txtCredits
        '
        Me.txtCredits.Location = New System.Drawing.Point(92, 158)
        Me.txtCredits.Name = "txtCredits"
        Me.txtCredits.Size = New System.Drawing.Size(56, 20)
        Me.txtCredits.TabIndex = 31
        '
        'txtYrEntered
        '
        Me.txtYrEntered.Location = New System.Drawing.Point(92, 134)
        Me.txtYrEntered.Name = "txtYrEntered"
        Me.txtYrEntered.Size = New System.Drawing.Size(100, 20)
        Me.txtYrEntered.TabIndex = 30
        '
        'txtGPA
        '
        Me.txtGPA.Location = New System.Drawing.Point(92, 110)
        Me.txtGPA.Name = "txtGPA"
        Me.txtGPA.Size = New System.Drawing.Size(64, 20)
        Me.txtGPA.TabIndex = 29
        '
        'txtCity
        '
        Me.txtCity.Location = New System.Drawing.Point(92, 86)
        Me.txtCity.Name = "txtCity"
        Me.txtCity.Size = New System.Drawing.Size(136, 20)
        Me.txtCity.TabIndex = 28
        '
        'txtMajor
        '
        Me.txtMajor.Location = New System.Drawing.Point(92, 62)
        Me.txtMajor.Name = "txtMajor"
        Me.txtMajor.Size = New System.Drawing.Size(56, 20)
        Me.txtMajor.TabIndex = 27
        '
        'txtName
        '
        Me.txtName.Location = New System.Drawing.Point(92, 38)
        Me.txtName.Name = "txtName"
        Me.txtName.Size = New System.Drawing.Size(168, 20)
        Me.txtName.TabIndex = 26
        '
        'txtIdno
        '
        Me.txtIdno.Location = New System.Drawing.Point(92, 14)
        Me.txtIdno.Name = "txtIdno"
        Me.txtIdno.Size = New System.Drawing.Size(100, 20)
        Me.txtIdno.TabIndex = 25
        '
        'frmUpdate
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(441, 348)
        Me.Controls.Add(Me.txtState)
        Me.Controls.Add(Me.btnDelete)
        Me.Controls.Add(Me.btnEnd)
        Me.Controls.Add(Me.btnChangeDatabase)
        Me.Controls.Add(Me.btnAdd)
        Me.Controls.Add(Me.btnLast)
        Me.Controls.Add(Me.btnPrevious)
        Me.Controls.Add(Me.btnFirst)
        Me.Controls.Add(Me.btnNext)
        Me.Controls.Add(Me.txtCredits)
        Me.Controls.Add(Me.txtYrEntered)
        Me.Controls.Add(Me.txtGPA)
        Me.Controls.Add(Me.txtCity)
        Me.Controls.Add(Me.txtMajor)
        Me.Controls.Add(Me.txtName)
        Me.Controls.Add(Me.txtIdno)
        Me.Name = "frmUpdate"
        Me.Text = "frmUpdate"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents txtState As System.Windows.Forms.TextBox
    Friend WithEvents btnDelete As System.Windows.Forms.Button
    Friend WithEvents btnEnd As System.Windows.Forms.Button
    Friend WithEvents btnChangeDatabase As System.Windows.Forms.Button
    Friend WithEvents btnAdd As System.Windows.Forms.Button
    Friend WithEvents btnLast As System.Windows.Forms.Button
    Friend WithEvents btnPrevious As System.Windows.Forms.Button
    Friend WithEvents btnFirst As System.Windows.Forms.Button
    Friend WithEvents btnNext As System.Windows.Forms.Button
    Friend WithEvents txtCredits As System.Windows.Forms.TextBox
    Friend WithEvents txtYrEntered As System.Windows.Forms.TextBox
    Friend WithEvents txtGPA As System.Windows.Forms.TextBox
    Friend WithEvents txtCity As System.Windows.Forms.TextBox
    Friend WithEvents txtMajor As System.Windows.Forms.TextBox
    Friend WithEvents txtName As System.Windows.Forms.TextBox
    Friend WithEvents txtIdno As System.Windows.Forms.TextBox

End Class
