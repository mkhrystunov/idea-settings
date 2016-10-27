#set ($params = ${PARAM_LIST})
#if ($params.contains("array"))
/**
${PARAM_DOC}
*/
#end
public function __construct(${PARAM_LIST}) {${BODY}}