从中我们可以发现只要变量不是为” “或者0，或者是false和null，只要是这些值empty都会返回true，而isset是判断变量是否存在，只要你这个变量不是null或未赋值，返回结果都是true，而is_null正好是isset的反结果。