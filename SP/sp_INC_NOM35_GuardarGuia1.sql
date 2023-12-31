USE [NORMA35]
GO
/****** Object:  StoredProcedure [dbo].[sp_INC_NOM35_GuardarGuia1]    Script Date: 25/10/2019 10:59:36 a. m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		Carlos Michaus Barcenas
-- Create date: 24/10/2019
-- Description:	Guarda Guia 1
-- =============================================
ALTER PROCEDURE [dbo].[sp_INC_NOM35_GuardarGuia1] 
	-- Add the parameters for the stored procedure here
	@p1 nvarchar(2),
	@p2 nvarchar(2),
	@p3 nvarchar(2),
	@p4 nvarchar(2),
	@p5 nvarchar(2),
	@p6 nvarchar(2),
	@p7 nvarchar(2),
	@p8 nvarchar(2),
	@p9 nvarchar(2),
	@p10 nvarchar(2),
	@p11 nvarchar(2),
	@p12 nvarchar(2),
	@p13 nvarchar(2),
	@p14 nvarchar(2),
	@p15 nvarchar(2),
	@p16 nvarchar(2),
	@p17 nvarchar(2),
	@p18 nvarchar(2),
	@p19 nvarchar(2),
	@p20 nvarchar(2),
	@continuarForm nvarchar(2),
	@codusuarioForm INT,
	@Hora_C1 time

AS
BEGIN

		declare @CodEncuesta int
		Select @CodEncuesta = isnull(max(CodEncuesta),0) + 1 FROM tbl_CuestionarioN35_1
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	INSERT INTO tbl_CuestionarioN35_1(CodEncuesta,CodUsuario,P1_1,P1_2,P1_3,P1_4,P1_5,P1_6,P2_1,P2_2,P3_1,P3_2,P3_3,P3_4,P3_5,P3_6,P3_7,P3_8,P3_9,P3_10,P3_11,P3_12,Continua,Fecha_C1,Hora_C1,Contestado)
	 VALUES(@CodEncuesta,@codusuarioForm,@p1,@p2,@p3,@p4,@p5,@p6,@p7,@p8,@p9,@p10,@p11,@p12,@p13,@p14,@p15,@p16,@p17,@p18,@p19,@p20,@continuarForm,GETDATE(),@Hora_C1,'1')
END
