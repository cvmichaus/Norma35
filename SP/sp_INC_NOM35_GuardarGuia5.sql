USE [NORMA35]
GO
/****** Object:  StoredProcedure [dbo].[sp_INC_NOM35_GuardarGuia5]    Script Date: 25/10/2019 10:27:09 a. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		Carlos Michaus Barcenas
-- Create date: 24/10/2019
-- Description:	Guarda Guia 1
-- =============================================
ALTER PROCEDURE [dbo].[sp_INC_NOM35_GuardarGuia5] 
	-- Add the parameters for the stored procedure here
	@p1  nvarchar(MAX),
	@p2 nvarchar(MAX),
	@p3 nvarchar(MAX),
	@p4 nvarchar(MAX),
	@p5 nvarchar(MAX),
	@p6 nvarchar(MAX),
	@p7 nvarchar(MAX),
	@p8 nvarchar(MAX),
	@p9 nvarchar(MAX),
	@p10 nvarchar(MAX),
	@p11 nvarchar(MAX),
	@p12 nvarchar(MAX),
	@p13 nvarchar(MAX),
	@p14 nvarchar(MAX),
	@codusuarioForm INT,
	@Hora_C1 time,
	@Continuar nvarchar(2)


AS
BEGIN

		declare @CodEncuesta int
		Select @CodEncuesta = isnull(max(CodEncuesta),0) + 1 FROM tbl_CuestionarioN35_5
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	INSERT INTO tbl_CuestionarioN35_5 (CodEncuesta,CodUsuario,P1_1,P1_2,P1_3,P1_4,P1_5,P1_6,P1_7,P1_8,P1_9,P1_10,P1_11,P1_12,P1_13,P1_14,Fecha_C5,Hora_C5,ContestadoC5,continuar)
	                            VALUES(@CodEncuesta, @codusuarioForm ,@p1,@p2,@p3,@p4,@p5,@p6,@p7,@p8,@p9,@p10,@p11,@p12,@p13,@p14,GETDATE(),@Hora_C1,'1',@Continuar)
END
