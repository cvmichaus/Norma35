-- =============================================
CREATE PROCEDURE [dbo].[sp_INC_NOM35_UsuariosContinuaronNO] 
	-- Add the parameters for the stored procedure here

AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	SELECT COUNT(*) as ContinuaronNO FROM tbl_CuestionarioN35_1 WHERE Continua = 'no'
END
